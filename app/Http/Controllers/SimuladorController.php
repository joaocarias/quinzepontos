<?php

namespace App\Http\Controllers;

use App\Concurso;
use App\Http\ViewModels\FechamentosViewModel;
use App\Http\ViewModels\MetodoMartingaleViewModel;
use App\Http\ViewModels\Simulador\TodosConcursosViewModel;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{
    public function index()
    {
        return view('simuladores.index');
    }

    public function todosConcursos()
    {
        $model = new TodosConcursosViewModel();

        $aposta = [
            5,     13,     6,     17,     3,     4,     15,     7,    8,     12,     16,     9,     18,     2,     25
        ];

        $model->setAposta($aposta);

        $concursos = [];
        $pontos = [];
        $gastos = [];

        $concursos = Concurso::all();
        $model->setConcursos($concursos);

        foreach ($concursos as $concurso) {
            $pontuacao = $this->ocorrencia(
                array(
                    $concurso->bola1, $concurso->bola2, $concurso->bola3, $concurso->bola4, $concurso->bola5,
                    $concurso->bola6, $concurso->bola7, $concurso->bola8, $concurso->bola9, $concurso->bola10,
                    $concurso->bola11, $concurso->bola12, $concurso->bola13, $concurso->bola14, $concurso->bola15,
                ),
                $aposta
            );
            array_push($pontos, $pontuacao);

            $gasto = $concurso->valor_rateio_11_numeros / 2;
            array_push($gastos, $gasto);
        }

        $model->setPontos($pontos);
        $model->setGastos($gastos);

        return view('simuladores.todosconcursos', ['model' => $model]);
    }

    public function metodoMartingale()
    {
        $model = new MetodoMartingaleViewModel();

        $arrayBilhete = [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $model->setAposta($arrayBilhete);

        $concursoInicio = 500;

        $pontos = 0;

        return view('simuladores.martingale', ['arrayBilhete' => $arrayBilhete]);
    }

    public function fechamentos()
    {
        $model = new FechamentosViewModel();

        $concursoReferencia = 1000;
        $concursos = Concurso::where('concurso', '<', $concursoReferencia)->orderBy('id', 'desc')->take(10)->get();
        $model->setConcursos($concursos);

        $concurso = Concurso::where('concurso', $concursoReferencia)->get();
        $model->setConcursoAtual($concurso);

        $contOcorrenciaBolas = $this->contOcorrenciaBola($concursos);
        $model->setContOcorrencia($contOcorrenciaBolas);

        arsort($contOcorrenciaBolas);
        $i = 0;
        $ignorados = [];
        while (current($contOcorrenciaBolas) && $i < 4) {
            array_push($ignorados, key($contOcorrenciaBolas));
            $i++;
            next($contOcorrenciaBolas);
        }
        $model->setIgnorados($ignorados);

        $apostas = [];
        $n_apostas = 100;
        $i = 0;
        $pontos = [];
        while ($i < $n_apostas) {
            $aposta = $this->gerarAposta($ignorados);
            sort($aposta);
            array_push($apostas, $aposta);
            $i++;
            $ponto = $this->ocorrencia(
                array(
                $concurso[0]->bola1, $concurso[0]->bola2, $concurso[0]->bola3, $concurso[0]->bola4, $concurso[0]->bola5,
                $concurso[0]->bola6, $concurso[0]->bola7, $concurso[0]->bola8, $concurso[0]->bola9, $concurso[0]->bola10,
                $concurso[0]->bola11, $concurso[0]->bola12, $concurso[0]->bola13, $concurso[0]->bola14, $concurso[0]->bola15,
            ), $aposta);
            array_push($pontos, $ponto);
        }

        $model->setApostas($apostas);
        $model->setPontos($pontos);

       return view('simuladores.fechamentos', ['model' => $model]);
    }

    private function gerarAposta($ignorados)
    {
        $p = 0;
        $aposta = [];
        while ($p < 15) {
            $r = mt_rand(1, 25);
            if (!in_array($r, $ignorados) && !in_array($r, $aposta)) {
                array_push($aposta, $r);
                $p++;
            }
        }
        return $aposta;
    }

    private function contOcorrenciaBola($concursos)
    {
        $arrayOcorrencia = [
            1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0,
            6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0,
            11 => 0, 12 => 0, 13 => 0, 14 => 0, 15 => 0,
            16 => 0, 17 => 0, 18 => 0, 19 => 0, 20 => 0,
            21 => 0, 22 => 0, 23 => 0, 24 => 0, 25 => 0
        ];

        foreach ($concursos as $row) {
            $arrayOcorrencia[$row->bola1]++;
            $arrayOcorrencia[$row->bola2]++;
            $arrayOcorrencia[$row->bola3]++;
            $arrayOcorrencia[$row->bola4]++;
            $arrayOcorrencia[$row->bola5]++;
            $arrayOcorrencia[$row->bola6]++;
            $arrayOcorrencia[$row->bola7]++;
            $arrayOcorrencia[$row->bola8]++;
            $arrayOcorrencia[$row->bola9]++;
            $arrayOcorrencia[$row->bola10]++;
            $arrayOcorrencia[$row->bola11]++;
            $arrayOcorrencia[$row->bola12]++;
            $arrayOcorrencia[$row->bola13]++;
            $arrayOcorrencia[$row->bola14]++;
            $arrayOcorrencia[$row->bola15]++;
        }

        return $arrayOcorrencia;
    }

    private function ocorrencia($array1, $array2)
    {
        $pontos = 0;

        foreach ($array2 as $item)
            if (in_array($item, $array1)) {
                $pontos++;
            }

        return $pontos;
    }
}
