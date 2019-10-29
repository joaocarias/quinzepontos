<?php

namespace App\Http\ViewModels;

class FechamentosViewModel
{
    private $ignorados = [];
    private $concursos = [];
    private $concursoAtual = [];
    private $contOcorrencia = [];
    private $apostas = [];
    private $pontos = [];
    private $gastos = [];
    private $nApostas = 0;
    private $ganhos = [];
    
    function __construct()
    {
        $this->ignorados = [];
        $this->concursos = [];
        $this->concursoAtual = [];
        $this->contOcorrencia = [];
        $this->apostas = [];
        $this->pontos = [];
        $this->gastos = [];
        $this->nApostas = 0;
    }
    
    public function getPontos(){
        return $this->pontos;
    }
    
    public function getGanhos(){
        return $this->ganhos;
    }

    public function getNApostas(){
        return $this->nApostas;
    }    

    public function setPontos($pontos){
        $this->pontos = $pontos;
    }

    public function setGanhos($ganhos){
        $this->ganhos = $ganhos;
    }

    public function setNApostas($nApostas){
        $this->nApostas = $nApostas;
    }
    
    public function getGastos(){
        return $this->gastos;
    }    

    public function setGastos($gastos){
        $this->gastos = $gastos;
    }

    public function getApostas(){
        return $this->apostas;
    }

    public function setApostas($apostas){
        $this->apostas = $apostas;
    }

    public function getContOcorrencia(){
        return $this->contOcorrencia;
    }

    public function setContOcorrencia($contOcorrencia){
        $this->contOcorrencia = $contOcorrencia;
    }

    public function getConcursoAtual(){
        return $this->concursoAtual;
    }

    public function setConcursoAtual($concursoAtual){
        $this->concursoAtual = $concursoAtual;
    }

    public function getConcursos(){
        return $this->concursos;
    }

    public function setConcursos($concursos){
        $this->concursos = $concursos;
    }

    public function getIgnorados(){
        return $this->ignorados;
    }

    public function setIgnorados($ignorados){
        $this->ignorados = $ignorados;
    }
}
