@extends('layouts.main')

@section('title', "Criar um evento")

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image" class=title-create>Imagem do Evento:</label>
            <input type="file"  class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title" class=title-create>Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento...">
        </div>
        <div class="form-group">
            <label for="date" class=title-create>Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title" class=title-create>Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome do evento...">
        </div>
        <div class="form-group">
            <label for="title" class=title-create>O evento é privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title" class=title-create>Descrição:</label>
            <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title" class=title-create>Adcione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco">Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Bar">Open Bar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food">Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes">Brindes
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Tristeza e Desespero">Tristeza e Desespero
            </div>
        </div>
        <div class="container_btncreate">
        <input type="submit" class="btn btm-primary" value="Criar Evento" id="buttoncreate">
        </div>
    </form>

</div>



@endsection
