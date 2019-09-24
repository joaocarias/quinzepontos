<?php

namespace App\Http\ViewModels;

class FechamentosViewModel
{
    private $ignorados = [];
    
    function __construct()
    {
        $this->ignorados = [];
    }

    public function getIgnorados(){
        return $this->ignorados;
    }

    public function setIgnorados($ignorados){
        $this->ignorados = $ignorados;
    }
}
