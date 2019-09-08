<?php

namespace App\Http\Controllers;

use App\Concurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\LocalGanhador;

class ResultadoController extends Controller
{
    public function index()
    {
        return view('resultados.index');
    }

    public function atualizar()
    {
        $arquivo = 'resultados/d_lotfac.htm';
        $conteudoArquivo = "NULL";
        if (Storage::disk('public')->exists($arquivo)) {
            $conteudoArquivo = Storage::disk('public')->get($arquivo);
        }

       
        $er = "/<td(.*?)?>(.*?)+<\/td>/i";
        preg_match_all($er, $conteudoArquivo, $matches);

        $ganhadores = array();
        $ganhador = new LocalGanhador();
        
        $meuConcurso = new Concurso();
        $numeroGanhadores = 0;

        $i = 0;
        while($i < 1){
            $meuConcurso->concurso = $matches[0][$i];

            $i++;
            $meuConcurso->data_sorteio = $matches[0][$i];
            
            $i++;
            $meuConcurso->bola1 = $matches[0][$i];

            $i++;
            $meuConcurso->bola2 = $matches[0][$i];

            $i++;
            $meuConcurso->bola3 = $matches[0][$i];

            $i++;
            $meuConcurso->bola4 = $matches[0][$i];

            $i++;
            $meuConcurso->bola5 = $matches[0][$i];

            $i++;
            $meuConcurso->bola6 = $matches[0][$i];

            $i++;
            $meuConcurso->bola7 = $matches[0][$i];

            $i++;
            $meuConcurso->bola8 = $matches[0][$i];

            $i++;
            $meuConcurso->bola9 = $matches[0][$i];

            $i++;
            $meuConcurso->bola10 = $matches[0][$i];

            $i++;
            $meuConcurso->bola11 = $matches[0][$i];

            $i++;
            $meuConcurso->bola12 = $matches[0][$i];

            $i++;
            $meuConcurso->bola13 = $matches[0][$i];

            $i++;
            $meuConcurso->bola14 = $matches[0][$i];

            $i++;
            $meuConcurso->bola15 = $matches[0][$i];

            $i++;
            $meuConcurso->arrecadacao_total = $matches[0][$i];

            $i++;
            $meuConcurso->ganhadores_15_numeros = $matches[0][$i];

            $i++;
            $ganhador->cidade = $matches[0][$i];

            $i++;
            $ganhador->uf = $matches[0][$i];           

            $i++;
            $meuConcurso->ganhadores_14_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->ganhadores_13_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->ganhadores_12_numeros = $matches[0][$i];
            
            $i++;
            $meuConcurso->ganhadores_11_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->valor_rateio_15_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->valor_rateio_14_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->valor_rateio_13_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->valor_rateio_12_numeros = $matches[0][$i];
            
            $i++;
            $meuConcurso->valor_rateio_11_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->acumulado_15_numeros = $matches[0][$i];

            $i++;
            $meuConcurso->estimativa_premio = $matches[0][$i];

            $i++;
            $meuConcurso->valor_acumulado_especial = $matches[0][$i];

            if($meuConcurso->ganhadores_15_numeros > 0){
                array_push($ganhadores, $ganhador);
                $t = 1;
                while($t < $meuConcurso->ganhadores_15_numeros){
                    $ganhador = new LocalGanhador();

                    $i++;
                    $ganhador->cidade = $matches[0][$i];
        
                    $i++;
                    $ganhador->uf = $matches[0][$i];  
                    
                    array_push($ganhadores, $ganhador);
                    $t++;
                }
                echo "asdf";
               
            }
            print_r($meuConcurso->ganhadores_15_numeros);
            

        }

        echo "<pre>";
        print_r($meuConcurso->ganhadores_15_numeros);
        //print_r($ganhadores);
      //  print_r($matches);
        echo "</pre>";

        //  return view('resultados.atualizar');
    }

    public function create()
    { }

    public function store(Request $request)
    { }

    public function show($id)
    { }

    public function edit($id)
    { }

    public function update(Request $request, $id)
    { }

    public function destroy($id)
    { }
}
