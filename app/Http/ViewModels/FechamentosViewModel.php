<?php

namespace App\Http\ViewModels;

class FechamentosViewModel
{
    private $ignorados = [];
    private $concursos = [];
    private $concursoAtual = [];
    
    function __construct()
    {
        $this->ignorados = [];
        $this->concursos = [];
        $this->concursoAtual = [];
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
