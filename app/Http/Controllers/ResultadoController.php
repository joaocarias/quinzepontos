<?php

namespace App\Http\Controllers;

use App\Concurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\LocalGanhador;
use App\MyLibs\Auxiliar;
use Exception;

class ResultadoController extends Controller
{
    public function index()
    {
        return view('resultados.index');
    }

    private function removerHtml($s){
        $pos = strpos($s, ">");
        $domain = substr($s, $pos + 1);
        return strstr($domain, '<', true);        
    }

    public function atualizar()
    {
        try{
            $numeroDeAtualizacoes = 0;
            $arquivo = 'resultados/d_lotfac.htm';
            $conteudoArquivo = "NULL";
            if (Storage::disk('public')->exists($arquivo)) {
                $conteudoArquivo = Storage::disk('public')->get($arquivo);
            
                $er = "/<td(.*?)?>(.*?)+<\/td>/i";
                preg_match_all($er, $conteudoArquivo, $matches);
            
                $quantidadeDeDados = count($matches[0]);
                $i = 0;
                
                while($i < $quantidadeDeDados){
                    $meuConcurso = new Concurso();
                    $ganhador = new LocalGanhador();
                    $ganhadores = array();
        
                    $meuConcurso->concurso = $this->removerHtml($matches[0][$i]);  
                                       
                    $i++;                
                    $meuConcurso->data_sorteio = Auxiliar::converterDataParaUSA($this->removerHtml($matches[0][$i]));
                
                    $i++;
                    $meuConcurso->bola1 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola2 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola3 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola4 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola5 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola6 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola7 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola8 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola9 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola10 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola11 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola12 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola13 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola14 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->bola15 = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->arrecadacao_total = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->ganhadores_15_numeros = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $ganhador->cidade = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $ganhador->uf = $this->removerHtml($matches[0][$i]);           
        
                    $i++;
                    $meuConcurso->ganhadores_14_numeros = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->ganhadores_13_numeros = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->ganhadores_12_numeros = $this->removerHtml($matches[0][$i]);
                    
                    $i++;
                    $meuConcurso->ganhadores_11_numeros = $this->removerHtml($matches[0][$i]);
        
                    $i++;
                    $meuConcurso->valor_rateio_15_numeros = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->valor_rateio_14_numeros = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->valor_rateio_13_numeros = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->valor_rateio_12_numeros = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
                    
                    $i++;
                    $meuConcurso->valor_rateio_11_numeros = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->acumulado_15_numeros = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->estimativa_premio = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
        
                    $i++;
                    $meuConcurso->valor_acumulado_especial = str_replace(',','.', str_replace('.','', $this->removerHtml($matches[0][$i])));
                    
                    $query = Concurso::where('concurso', $meuConcurso->concurso)->get();                        
                    if(count($query) == 0){
                        $meuConcurso->save();
                        $numeroDeAtualizacoes++;                    
                    }

                    if ( $meuConcurso->ganhadores_15_numeros > 0){
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
                    }

                    $i++;
                }
            }
           
            return view('resultados.index', ['msg' => 200]);    
        }catch(Exception $e){
            var_dump($e);
        }
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
