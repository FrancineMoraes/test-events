@extends('site.layouts.app')

@section('content')
    @if(session('message'))
        @include('site.layouts.modal')
    @endif
    @foreach($events as $event)
        <a style="color: inherit;text-decoration:none;" href="{{route('site.event.event', [$event->id, $slug = str_slug($event->title, '-')])}}">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$event->image->image_box}}" alt="Imagem do evento">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-text">Bairro: {{$event->address->district}} <br> De: {{date("d/m/Y", strtotime($event->first_apresentation))}} <br> À: {{date("d/m/Y", strtotime($event->last_apresentation))}}</p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endsection

@section('script')

@if(session('message'))
<script>
    $('.modal').modal('show');
</script>
@endif
@stop