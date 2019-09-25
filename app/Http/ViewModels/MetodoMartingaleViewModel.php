<?php

namespace App\Http\ViewModels;

class MetodoMartingaleViewModel
{
    private $aposta = [];

    function __construct()
    {
        $this->aposta = [];
    }

    public function getAposta(){
        $this->aposta;
    }    

    public function setAposta($aposta){
        $this->aposta = $aposta;
    }
}