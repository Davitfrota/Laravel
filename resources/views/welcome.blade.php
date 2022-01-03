@extends('layouts.main')

@section('title','Davi Events')

@section('content')

        <div id="search-container" class="col-md-12">
            <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
        </div>


    <div id="events-container" class="col-md-12"></div>
        <h2>Próximos Eventos</h2>
        <p class= "subtitle">Veja os eventos dos proximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)

                <div class = "card col-md-3">
                    <img class = "imagem" src="/img/962961.jpg" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participantes">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>

                </div>
            @endforeach
        </div>


{{--
        <h1>Hello World</h1>
        <img src="/img/962961.jpg" alt="962961">
        @if(10<6)
        <p>10 é maior que 6 !</p>
        @endif

        <p>{{ $nome }}</p>


        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome =="Matheus")
        <p> O nome é Matheus</p>
        @else
        <p>o nome nao é pedro nem matheus</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p> {{$arr[$i]}}  -{{$i}} </p>
            @if ($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        @foreach ($nomes as $Nomenclatura)
        <p>{{$loop->index}}</p>
        <p>{{  $Nomenclatura}}</p>

        @endforeach

        @php
            $name = "Davi";
            echo $name;
        @endphp-->
        <!--Comentário do html -->

        {{-- Este é um comentário do Blade --}}

@endsection
