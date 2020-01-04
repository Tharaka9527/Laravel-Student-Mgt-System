<div class="modal fade" id="batch-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">ADD NEW BATCH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Course Name Field -->
      <div class="form-group">
          {!! Form::label('course_name', 'Batch Year:') !!}
          {!! Form::text('year', null, ['class' => 'form-control']) !!}
      </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    {!! Form::submit('Create batch', ['class' => 'btn btn-success']) !!}
  </div>
</div>
</div>
</div>
