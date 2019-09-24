<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\FechamentosViewModel;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{

    private $gastos = 0.00;
    private $onzePontos = 0;
    private $dozePontos = 0;
    private $trezePontos = 0;
    private $quatozePontos = 0;
    private $quinzePontos = 0;
    
    private $resultado = [1, 3, 4, 6, 7,
    8, 9, 12, 14, 15,
    17, 18, 19, 24, 25];

    public function novoJogo (){
        $this->gastos = $this->gastos + 2.00;
    }

    public function index()
    {
        return view('simuladores.index');
    }

    public function metodoMartingale()
    {
        $arrayBilhete = [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

        return view('simuladores.martingale', ['arrayBilhete' => $arrayBilhete]);
    }

    public function fechamentos()
    {        
        $model = new FechamentosViewModel();

        $array = [ 6, 15, 20, 23];
        $model->setIgnorados($array);

    //     $numeroDeApostas = 15;
    //     $apostas = array();
    //     $array_ingnorar = [ 6, 15, 20, 23 ];

    //     $i = 0; 
        
    //     while($i < $numeroDeApostas ){
    //         $aposta = array();
            
    //         while(count($aposta) < 15){
    //             $random =  mt_rand(1, 25);  
    //             if(!in_array($random, $aposta) && !in_array($random, $array_ingnorar)){
    //                 array_push($aposta, $random);
    //             }                              
    //         }

    //         sort($aposta);
            
    //         $ocorrencia = 0;
    //         foreach($apostas as $item){
    //             $ocorrenciaTmp = $this->ocorrencia($item, $aposta);
    //             if($ocorrenciaTmp > $ocorrencia){
    //                 $ocorrencia = $ocorrenciaTmp;
    //             }
    //         }

    //         if($ocorrencia < 14){
    //             $this->novoJogo ();
    //             $this->pontuacao($this->resultado, $aposta);
    //             array_push($apostas, $aposta);
    //             $i++;        
    //         }            
    //     }

    //     $this->ImprimirFinal();

    //     foreach($apostas as $aposta){
    //         $this->imprimirAposta($aposta);
    //     }

    //  //   var_dump($apostas);

       return view('simuladores.fechamentos', ['model' => $model]);
    }

    private function ocorrencia($array1, $array2){
        $pontos = 0;

        foreach($array2 as $item)
        if(in_array($item, $array1)){
            $pontos++;
        }

        return $pontos;
    }

    private function ImprimirFinal(){
        $ganho = ($this->onzePontos * 4) + ( $this->dozePontos * 8) + ($this->trezePontos * 12) + ($this->quatozePontos * 1500) + ($this->quinzePontos * 1000000);
        $saldo = $ganho - $this->gastos;
        echo "<p>Gasto: R$ " 
                . $this->gastos 
                . "</p>";
        echo "<p> 11 Pontos: " . $this->onzePontos . " [" . $this->onzePontos * 4 ."]</p>" 
                . " 12 Pontos: " . $this->dozePontos . " [" . $this->dozePontos * 8 ."]</p>"
                . " 13 Pontos: " . $this->trezePontos . " [" . $this->trezePontos * 12 ."]</p>"
                . " 14 Pontos: " . $this->quatozePontos . " [" . $this->quatozePontos * 1500 ."]</p>"
                . " 15 Pontos: " . $this->quinzePontos . " [" . $this->quinzePontos * 1000000 ."]</p>";
        echo "<p>Ganho: R$ 
                " . $ganho 
                . "</p>";
        echo "<p>Saldo: R$ " . $saldo . "</p>";
        echo "<hr>";
    }

    private function pontuacao($resultado, $aposta){
        $pontos = $this->ocorrencia($this->resultado, $aposta);
        if($pontos == 11){
            $this->onzePontos++;
        }else if($pontos == 12){
            $this->dozePontos++;
        }else if($pontos == 13){
            $this->trezePontos++;
        }else if($pontos == 14){
            $this->quatozePontos++;
        }else if($pontos == 15){
            $this->quinzePontos++;
        }
    }

    private function imprimirAposta($aposta){
       
        $pontos = $this->ocorrencia($this->resultado, $aposta);
        $strong = "";
        $strongFinal = "";
        $p = "<p>";

        if( $pontos > 10 ){
            $strong = "<strong>";
            $strongFinal = "</strong>";            
        }

        if( $pontos == 13 ){
            $p = "<p style='color:blue;'>";
        }

        if( $pontos == 14 ){
            $p = "<p style='color:green;'>";
        }
        
        if( $pontos == 14 ){
            $p = "<p style='color:red;'>";
        }

        echo $p . $strong;
        foreach($aposta as $item){
            echo $item . " ";
        }
        echo " - " . $pontos . $strongFinal . "</p>";
    }

    public function create()
    {
 
    }

    public function store(Request $request)
    {
   
    }

    public function show($id)
    {
   
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
