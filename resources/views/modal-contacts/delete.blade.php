
    <div class="modal fade" id="{{$contact->id}}delete" tabindex="-1" role="dialog" aria-labelledby="editleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{$contact->id}}delete">Are you sure that you want to delete this contact?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <div class="modal-body">

                <div class="form-group">
                   {!!Form::open(['action' =>['ContactsController@destroy', $contact->id], 'method' => 'POST' ])!!}
             {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Yes', ['class' => 'btn btn-primary'])}}
                {{Form::reset('No', ['class' =>'btn btn-danger', 'data-dismiss' => 'modal'])}}
            {!!Form::close()!!}

                </div>
            </div>

        </div>
    </div>
    </div>
    