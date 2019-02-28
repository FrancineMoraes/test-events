@extends('site.layouts.app')

@section('content')
<div class="col-md-12 js-response" style="text-align:center;">
    <h3>Carrinho</h3>
    <div class="col-md-12"><br></div>
    <h4>{{$event->title}}</h4>
    <div class="col-md-12"><br></div>
    @foreach($event->sessions as $session)
    <p>{{date("d/m/Y", strtotime($session->started))}} - Pelotas / Rio grande do sul</p>
    @endforeach
    @foreach($event->tickets as $ticket)
        @include('site.events.cart-finished')
        <hr>
        <div class="col-md-12"><br></div>
        <p>Ticket {{$event->title}} - {{$ticket->type}} - 1º Lote</p>
        <p>Valor: {{$ticket->price}}</p>
        <div class="col-md-12">
            <label for="quantity">Quantidade: {{$ticket->quantity}}</label>
            <br>
            <input type="number" class="quantity" name="quantity" placeholder="Quantidade">
            <input type="hidden" class="ticket_id" name="ticket_id" value="{{$ticket->id}}">
            <input type="hidden" class="event_id" name="event_id" value="{{$event->id}}">
            <button type="button" class="btn btn-dark submit-quantity">Ok</button>
        </div>
    @endforeach
</div>
<div class="col-md-12"><br></div>
<div class="col-md-12" style="text-align:center;">
    <button type="button" class="btn btn-dark finalizar">Finalizar</button>
</div>

@endsection

@section('script')
<script>
$(document).ready(function() {

    $('body').on('click','.submit-quantity', function() {
        var quantity = $(".quantity").val();
        var id = $(".ticket_id").val();
        var event_id = $(".event_id").val();

        $.ajax({
            headers: {
                'X-CSRF-Token': "{{ csrf_token() }}"
            },
            type: "POST",
            url: "{{route('site.cart.change.quantity')}}",
            data: {quantity, id, event_id},
            success: function(data){
                $('.js-response').html(data);
            }
        });

    });

    $( ".finalizar" ).click(function() {
        
        $('.modal').modal('show');

    });
});
</script>
@endsection