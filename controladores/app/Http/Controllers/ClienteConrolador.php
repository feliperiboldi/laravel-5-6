<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteConrolador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Lista de Todos os Clientes";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Formulário para Cadastrar Novo Cliente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s = "Armazenar: ";
        $s .= "Nome: ".$request->input('nome')." e ";
        $s .= "Idade: ".$request->input('idade');

        return response($s, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $v = ["Felipe", "João", "Glaucio", "Daniel"];

        if($id >= 0 && $id < count($v)) {
            return $v[$id];
        } else {
            return "Nenhum ID foi encontrado";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Formulário para editar o Cliente com o ID ".$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s = "Atualizar Cliente com o ID: ".$id;
        $s .= "Nome: ".$request->input('nome')." e ";
        $s .= "Idade: ".$request->input('idade');

        return response($s, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response("Apagado Cliente com o ID $id", 200);
    }

    public function requisitar(Request $request)
    {
        echo "Nome: ".$request->input('nome');
    }
}
