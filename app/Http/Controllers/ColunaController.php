<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coluna;

class ColunaController extends Controller
{
    public function cadastro_html(Request $request){
        return view('cadastro_aviso');

    }

    public function coluna_cadastro(Request $request){
        $request->validate([
            'descricao' => 'required',
           
        ]);

        

        try {

            $coluna = new coluna();
          
        
            $coluna->descricao = $request->descricao;
        

            $coluna->save();


            return response()->json(['message' => 'Coluna cadastrada com sucesso!', 'erro' => 'n'], 200);

        }catch(\trowable $th){
            return response()->json(['message' => 'Erro ao cadastrar coluna: ', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }


    }
    

    
}
