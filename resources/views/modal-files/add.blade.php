<div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="addleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['action' => 'FilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          <input type="file" name="file">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
            <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>