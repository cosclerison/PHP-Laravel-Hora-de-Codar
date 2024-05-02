@extends('layouts.main')

@section('title', "Criar evento")

@section("content")
<!-- Inicio -->
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <!-- adicionamos enctype="multipart/form-data" para envio de arquivos pelo formulario -->
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input 
                type="file" 
                class="form-control-file"
                id="image"
                name="image"
                placeholder="Nome do evento...">
        </div>
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
            <label for="date">Data do evento:</label>
            <input 
                type="date" 
                class="form-control"
                id="date"
                name="date">
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
                rows="10">
            </textarea>
        </div>
        <div class="form-group">
            <label for="items">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Bebida"> Bebida
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection