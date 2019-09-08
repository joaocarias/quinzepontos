<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResultadoController extends Controller
{
    public function index()
    {
        return view('resultados.index');
    }
   
    public function atualizar(){
        $arquivo = 'resultados/d_lotfac.htm';
        $conteudoArquivo = "NULL";
        if(Storage::disk('public')->exists($arquivo)){
            $conteudoArquivo = Storage::disk('public')->get($arquivo);
        }

        // $posI = strrpos($conteudoArquivo, "D5BCCD");
        // $string = substr($conteudoArquivo, $posI);
        // var_dump($string);
        echo "<pre>";
        var_dump($conteudoArquivo);
        echo "</pre>";
      
        //  return view('resultados.atualizar');
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
       
    }
   
    public function update(Request $request, $id)
    {
       
    }
  
    public function destroy($id)
    {
        
    }
}
