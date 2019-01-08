@extends('layout.app')

@section('titulo', "Filho")

@section('barraLateral')
	@parent
	<p>Esta sessão é do Template Filho</p>
@endsection

@section('conteudo')
	<p>Este é o conteúdo do Filho</p>
@endsection