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
        <br>
    </div>
    <div class="col-md-6">
        <h4>Informações</h4>
        <p>Primeira apresentação do evento: {{date("d/m/Y", strtotime($event->first_apresentation)) . ' às ' . date("H:i:s", strtotime($event->first_apresentation))}}</p>
        <p>Data de encerramento do evento: {{date("d/m/Y", strtotime($event->last_apresentation)) . ' às ' . date("H:i:s", strtotime($event->last_apresentation))}}</p>
        <hr>
    </div>
    <div class="col-md-6">
        <h4>Sessões disponíveis: </h4>
        @foreach($event->sessions as $session)
            <p>Sessão: {{$session->name}}</p>
            <p>Data e horário de início: {{date("d/m/Y", strtotime($session->started)) . ' às ' . date("H:i:s", strtotime($session->started))}}</p>
            <p>Data e horário de término: {{date("d/m/Y", strtotime($session->finished)) . ' às ' . date("H:i:s", strtotime($session->finished))}}</p>
        @endforeach
        <hr>
    </div>
    <div class="col-md-12">
        <br>
    </div>
    <div class="col-md-8">
        <h4>Local do evento: </h4>
        @isset($event->address->street)<p>Rua: {{$event->address->street}}</p>@endisset
        @isset($event->address->number)<p>Número: {{$event->address->number}}</p>@endisset
        @isset($event->address->stredistrictet)<p>Bairro: {{$event->address->district}}</p>@endisset
        @isset($event->address->complement)<p>Complemento: {{$event->address->complement}}</p>@endisset
        @isset($event->address->localization)<p>Local: {{$event->address->localization}}</p>@endisset
        <hr>
    </div>
    <div class="col-md-4">
        <form action="{{route('site.add.cart', $event->id)}}" method="post">
            {{csrf_field()}}
            <button type="submit" class="btn btn-secondary">Adicionar ao carrinho</button>
        </form>
    </div>
    <div class="col-md-12">
        <br>
    </div>
@endsection