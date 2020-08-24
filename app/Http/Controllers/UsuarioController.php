<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = DB::select('select * from usuario');

        return view('/Site/index', ['usuarios' => $usuarios]);
    }

    public function create(Request $request)
    {
        return view('/Site/cadastrar');
    }


    public function store(Request $request)
    {
        $values = [
            $request->nome
        ];

        DB::insert('insert into usuario (nome) values (?)', $values);

        return redirect()->action("UsuarioController@index");
    }

    public function editar($id)
    {

        $usuario = DB::select(" SELECT * FROM usuario WHERE id = ? ", [$id]);

        if (!empty($usuario)) {
            return view("Site/editar")->with("usuario", $usuario);
        } else {
            return redirect()->action("UsuarioController@index");
        }
    }

    public function update(Request $request)
    {

        $values = [
            $request->nome,
            $request->id,
        ];

        DB::update(" UPDATE usuario SET nome = ? WHERE id  = ? ", $values);

        return redirect()->action("UsuarioController@index");
    }

    public function delete($id)
    {
        $rows = DB::select(" SELECT id FROM usuario WHERE id = ? ", [$id]);

        if (!empty($rows)) {
            DB::delete(" DELETE FROM usuario WHERE id = ? ", [$id]);
        }

        return redirect()->action("UsuarioController@index");
    }
}
