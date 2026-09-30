<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coluna;

class ColunaController extends Controller
{
    public function cadastro_html(Request $request){
        return view('cadastro_aviso');

    }
}
