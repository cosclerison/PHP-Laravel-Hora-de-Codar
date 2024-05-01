@extends('layouts.main')

@section('title', "Criar evento")

@section("content")
<!-- Inicio -->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input 
                type="text" 
                class="form-control"
                id="title"
                name="title"
                placeholder="Nome do evento...">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input 
                type="text" 
                class="form-control"
                id="city"
                name="city"
                placeholder="Local do evento...">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea 
                name="description" 
                id="description"
                class="form-control mb-4"
                placeholder="O que vai acontecer neste evento?"
                cols="30" 
                rows="10"
            >
            </textarea>

        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection