<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\funcionario;
use illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{

    public function funcionario_cadastro(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required|min:6',
        ]);

        

        try {

            $funcionario = new funcionario();
          
            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->senha = md5($request->senha);

            $funcionario->save();


            return response()->json(['message' => 'Funcionário cadastrado com sucesso!', 'erro' => 'n'], 200);

        }catch(\trowable $th){
            return response()->json(['message' => 'Erro ao cadastrar funcionário: ', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }


    }

 public function ver_funcionario(Request $request)
    {   request()->validate([
            'id' => 'required|integer',
        ]);
        $funcionario = Funcionario::find($request->id);
        if ($funcionario) {
            return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Funcionário não encontrado', 'erro' => 's'], 404);
        }
    }  

    public function  listar_funcionario(Request $request)
    {
        $funcionario = Funcionario::all();
        return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
    }

    public function alterar_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:funcionario,id',
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required|min:6',
        ]);

        

        try {

            $funcionario = funcionario::find($request->id);

            if($funcionario->email !== $request->email) {
                $funcionario_email_igual = Funcionario::where('email', $request->email)->first();
                if ($funcionario_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado', 'erro' => 's'], 200);
                }
            }
          
            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->senha = md5($request->senha);

            $funcionario->save();


            return response()->json(['message' => 'Funcionário cadastrado com sucesso!', 'erro' => 'n'], 200);

        }catch(\trowable $th){
            return response()->json(['message' => 'Erro ao cadastrar funcionário: ', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

   
   public function deletar_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
        ]);
    }
    try {
        $funcionario = Funcionario::find($request->id);
        $funcionario->delete();
        return response()->json(['message' => 'Funcionário deletado com sucesso!', 'erro' => 'n'], 200);
    } catch (\throwable $th) {
        return response()->json(['message' => 'Erro ao deletar funcionário: ', 'erro' => 's', 'msg_erro' => $th->getMessage(), 'erro' => 's'], 200);
    }
}
    
