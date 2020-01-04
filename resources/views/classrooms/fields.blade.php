<div class="modal fade" id="classroom-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ADD NEW CLASSROOM</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <!-- Classroom Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('classroom_name', 'Classroom Name:') !!}
            {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Classroom Code Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('classroom_code', 'Classroom Code:') !!}
            {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Classroom Description Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('classroom_description', 'Classroom Description:') !!}
            {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Classroom Status Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('classroom_status', 'Classroom Status:') !!}
            <label class="checkbox-inline">
                {!! Form::hidden('classroom_status', 0) !!}
                {!! Form::checkbox('classroom_status', '1', null) !!}
            </label>
        </div>

        </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Create Classroom', ['class' => 'btn btn-success']) !!}
    </div>
   </div>
  </div>
</div>