@extends('site.layouts.app')

@section('content')
    <div class="col-md-12">
        <img src="{{$event->image->image_layer}}" style="width: 100%;">
    </div>
    <div class="col-md-12">
        <h3 style="text-align: center;">{{$event->title}}</h3>
    </div>
    <div class="col-md-12">
        <br>
    </div>
    <div class="col-md-12" style="text-align:center;">
        {{$event->description}}
    </div>
    <div class="col-md-12">
        <h4>Informações</h4>
        <p>Data de início: {{$event->first_apresentation}}</p>
        <p>Data de encerramento: {{$event->last_apresentation}}</p>
        <p>Sessões disponíveis: </p>
        @foreach($event->sessions as $session)
            {{dd($session)}}
        @endforeach
        <p></p>
    </div>
@endsection