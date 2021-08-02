<?php

namespace App\Http\Controllers;

use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Hash;
class Usuario extends Controller
{
    public function cadastrar(){
 
     return view('usuario.cadastro');
    }
    public function salvar(Request $request){
        
        $request->validate([
            "nome"=>"required|min:5",
            "email"=>"required|email",
             "senha"=>array("required","regex:/^(?=.*[a-z])(?=.*[0-9])[\w$@]{6,}$/")
        ],[
            'nome.required'=>'O campo nome é Obribatório!',
            'nome.min'=>'O campo nome deve ter no mínimo 3 caracteres!',
            'email.required'=>'Preencha com email válido!',
            'senha.required'=>'O campo senha é Obrigatório!',
            'senha.regex'=>'O campo senha deve conter no mínimo 6 caracteres com pelo menos um número e uma letra!',
            
        ]);
        try{
            UsuarioModel::cadastrar($request);
            return redirect()->back()
                ->with('success', 'Created successfully!');
            //return view('usuario.sucesso');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }
    //
}
