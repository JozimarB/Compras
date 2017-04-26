<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\associado;

class associado_controller extends Controller
{
    public function index()
    {
      // Calculos e tudo mais é feito aqui dentro
      $associados = associado::paginate(1); 


      //Abaixo trara todos os valores
      //$associados = associado::all(); 

      //Se queisse bsucar pelo nome de algúem
	  //$associado = where('nome', 'like', $nome->get());      	

      //Ordenando
      //$associado = where('nome', 'like', $nome->orWhere('endereco', $endereco)->;      		  

      return view('associados.index', compact('associados'));



    }
}
