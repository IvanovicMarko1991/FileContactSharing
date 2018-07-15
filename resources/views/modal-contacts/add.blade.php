
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        {!! Form::open(['action' => 'ContactsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          {{ Form::label('name', 'Name')}} {{Form::text('name', '', ['class'=> 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
          {{Form::label('email', 'Email')}}
           {{Form::email('email', '', ['class'=>'form-control','placeholder' => 'Email'])}}
        </div>
      </div>
      <div class="modal-footer">

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} 
        {{Form::submit('Cancel', ['class' => 'btn btn-danger ', 'data-dismiss' => 'modal'])}} 
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>