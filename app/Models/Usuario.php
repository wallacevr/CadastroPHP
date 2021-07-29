<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;
Use Carbon\Carbon;
class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql= self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limite($limite);
        dd($sql->toSql());
    }

    public static function cadastrar(Request $request){
        DB::enableQueryLog();
        $sql =  self::insert([
            "nome" =>$request->input('nome'),
            "email" =>$request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" =>new Carbon()
        ]);
       // dd($sql->toSql(),$request->all());
    }



}