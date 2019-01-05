<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome() 
    {
    	return "Felipe Riboldi";
    }

    // Passando Parâmetros

    public function getNomeById($id)
    {
    	$v = ["Felipe", "João", "Glaucio", "Daniel"];

    	if($id >= 0 && $id < count($v)) {
    		return $v[$id];
    	} else {
    		return "Nenhum ID foi encontrado";
    	}
    }
}
