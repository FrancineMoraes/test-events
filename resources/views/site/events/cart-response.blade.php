<h3>Carrinho</h3>
<div class="col-md-12"><br></div>
<h4>{{$event->title}}</h4>
<div class="col-md-12"><br></div>
@foreach($event->sessions as $session)
<p>{{date("d/m/Y", strtotime($session->started))}} - Pelotas / Rio grande do sul</p>
@endforeach
@foreach($event->tickets as $ticket)
    <hr>
    <div class="col-md-12"><br></div>
    <p>Ticket {{$event->title}} - {{$ticket->type}} - 1º Lote</p>
    <p>Valor: {{$ticket->price}}</p>
    <div class="col-md-12">
            <div class="form-group">
                <label for="quantity">Quantidade: {{$ticket->quantity}}</label>
                <br>
                <input type="number" class="quantity" name="quantity" placeholder="Quantidade">
                <input type="hidden" class="ticket_id" name="ticket_id" value="{{$ticket->id}}">
                <input type="hidden" class="event_id" name="event_id" value="{{$event->id}}">
                <button type="button" class="btn btn-dark submit-quantity">Ok</button>
            </div>
        </div>
@endforeach