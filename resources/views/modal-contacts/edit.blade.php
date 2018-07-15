   
<div class="modal fade" id="{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="editleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{$contact->id}}">Share with</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    {!! Form::open([ 'action' =>['ContactsController@update', $contact->id], 'method'=> 'POST','enctype'=>'multipart/form-data'])!!}
                    <div class="form-group">
                        {{ Form::label('name', 'Name')}} 
                        {{Form::text('name', $contact->name, ['class'=> 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'Email')}} 
                        {{Form::email('email', $contact->email, ['class'=>'form-control','placeholder' => 'Email'])}}
                    </div>
                </div>
                <div class="modal-footer">
                    {{Form::hidden('_method', 'PUT')}}
                     {{Form::submit('Submit', ['class'=>'btn btn-primary', 'value' => $contact->id])}}
                      {{Form::submit('Cancel',  ['class' => 'btn btn-danger', 'data-dismiss' => 'modal'])}} 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
