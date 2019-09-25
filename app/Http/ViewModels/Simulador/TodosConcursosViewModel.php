<?php

namespace App\Http\ViewModels\Simulador;

class TodosConcursosViewModel
{
    private $aposta = [];
    private $concursos = [];
    private $pontos = [];
    private $gastos = [];

    function __construct()
    {
        $this->aposta = [];
        $this->concursos = [];
        $this->pontos = [];
        $this->gastos = [];
    }

    public function getAposta(){
        return $this->aposta;
    }    

    public function setAposta($aposta){
        $this->aposta = $aposta;
    }

    public function getConcursos(){
        return $this->concursos;
    }    

    public function setConcursos($concursos){
        $this->concursos = $concursos;
    }

    public function getPontos(){
        return $this->pontos;
    }    

    public function setPontos($pontos){
        $this->pontos = $pontos;
    }
    
    public function getGastos(){
        return $this->gastos;
    }    

    public function setGastos($gastos){
        $this->gastos = $gastos;
    }
}