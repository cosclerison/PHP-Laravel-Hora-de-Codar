@extends('layouts.main')

@section('title', "Produto")

@section("content")
<!-- Inicio -->

    @if($id != null)
        <p>Exibindo Produto id: {{ $id }}</p>
    @endif

<a href="/"><strong>HOME</strong></a>
<br>
<a href="/contact"><strong>Contatos</strong></a>

@endsection