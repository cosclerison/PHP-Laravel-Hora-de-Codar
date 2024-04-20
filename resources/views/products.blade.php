@extends('layouts.main')

@section('title', "Produtos")

@section("content")

<h1>Pagina de produtos...</h1>
    @if($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
<a href="/"><strong>HOME</strong></a>
<br>
<a href="/contact"><strong>Contatos</strong></a>

@endsection