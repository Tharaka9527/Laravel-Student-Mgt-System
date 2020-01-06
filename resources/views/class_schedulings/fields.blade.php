<div class="modal fade left" id="role-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModelLable" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLable"><i class="fa fa-registered" aria-hidden="true"> Class Shedule</i></h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button>
        </div>
        <div class="modal-body">
        <!-- Course Id Field -->
        <div class="row">
        <div class="form-group col-sm-6">
            <select class="form-control" name="course_id" id="course_id">
                <option value="">Select Course</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Level Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="level_id" id="level_id">
                <option value="">Select Level</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Shift Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="shift_id" id="shift_id">
                <option value="">Select Shift Id</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Classroom Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="classroom_id" id="classroom_id">
                <option value="">Select Class Id</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Batch Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="batch_id" id="batch_id">
                <option value="">Select Batch Id</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Day Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="day_id" id="day_id">
                <option value="">Select Day</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Time Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="time_id" id="time_id">
                <option value="">Select Time</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Teacher Id Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="teacher_id" id="teacher_id">
                <option value="">Select Teacher</option>
                <option value=""></option>
            </select>
        </div>

        <!-- Start Time Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="start_time" id="start_time">
                <option value="">Select Start Time</option>
                <option value=""></option>
            </select>
        </div>

        <!-- End Time Field -->
        <div class="form-group col-sm-6">
            <select class="form-control" name="end_time" id="end_time">
                <option value="">Select End Time</option>
                <option value=""></option>
            </select>
        </div>

        <div class="form-group col-sm-6">
            <select class="form-control" name="start_date" id="start_date">
                <option value="">Select Start Date</option>
                <option value=""></option>
            </select>
        </div>


        </div>

        <!-- Status Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('status', 'Status:') !!}
            <label class="checkbox-inline">
                {!! Form::hidden('status', 0) !!}
                {!! Form::checkbox('status', '1', null) !!}
            </label>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        {!! Form::submit('Create Role', ['class' => 'btn btn-success']) !!}
    </div>
   </div>
</div>
</div>

@section('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection
