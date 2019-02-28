<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('site.event.finished')}}" method="post">
                {{csrf_field()}}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nome (*): </label>
                            <input type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF (*): </label>
                            <input type="text" name="cpf">
                        </div>
                        <input type="hidden" name="id" value="{{$ticket->id}}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary button-ok">Ok</button>
                </div>
            </form>
        </div>
    </div>
</div>