@extends('layouts.main')

@section('title', 'Editando:' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando
        <div class="dots">
        </div>
        <div class="dots">
        </div>
        <div class="dots">
        </div>
    </h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="tamanho-img">
            <label for="image">Imagem do Evento:</label>
            <input type="file"  class="form-control-file" id="image" name="image">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
            </div>
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento..." value = {{$event->title}}>
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome do evento..."  value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Adcione itens de infraestrutura:</label>
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
        </div>
        <div class="container_btncreate">
        <input type="submit" class="btn btm-primary" value="Editar Evento" id="buttoncreate">
        </div>
    </form>

</div>



@endsection
