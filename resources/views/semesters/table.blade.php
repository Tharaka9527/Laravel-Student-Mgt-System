<div class="table-responsive">
    <table class="table" id="semesters-table">
        <thead>
            <tr>
                <th>Semester Name</th>
        <th>Semester Code</th>
        <th>Semester Duration</th>
        <th>Semester Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($semesters as $semesters)
            <tr>
            <td>{{ $semesters->semester_name }}</td>
            <td>{{ $semesters->semester_code }}</td>
            <td>{{ $semesters->semester_duration }}</td>
            <td>{{ $semesters->semester_description }}</td>
                <td>
                    {!! Form::open(['route' => ['semesters.destroy', $semesters->semester_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#semester-view-modal" 
                            data-semester_name="{{$semesters->semester_name}}"
                            data-semester_code="{{$semesters->semester_code}}"
                            data-semester_duration="{{$semesters->semester_duration}}"
                            data-semester_description="{{$semesters->semester_description}}"
                            data-created_at="{{$semesters->created_at}}" 
                            data-updated_at="{{$semesters->updated_at}}" 
                            data-academic-id="{{$semesters->semester_id}}"
                            class='btn btn-warning btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"> Show</i></a>
                        <a href="{{ route('semesters.edit', [$semesters->semester_id]) }}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="semester-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <input type="hidden" name="semester_id" id="semester_id">

        <!-- Semester Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('semester_name', 'Semester Name:') !!}
            {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Semester Code Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('semester_code', 'Semester Code:') !!}
            {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Semester Duration Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('semester_duration', 'Semester Duration:') !!}
            {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Semester Description Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('semester_description', 'Semester Description:') !!}
            {!! Form::textarea('semester_description', null, ['class' => 'form-control', 'cols' => 2, 'rows' => 5]) !!}
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
  </div>
</div>

@section('scripts')
  <script>
      $('#semester-view-modal').on('show.bs.modal', function(event){
        
        var button = $(event.relatedTarget)
        var semester_name = button.data('semester_name')
        var semester_code = button.data('semester_code')
        var semester_duration = button.data('semester_duration')
        var semester_description = button.data('semester_description')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var semester_id = button.data('semester_id')

        var modal = $(this)

        modal.find('.modal-title').text('VIEW SEMESTER INFORMATION');
        modal.find('.modal-body #semester_name').val(semester_name);
        modal.find('.modal-body #semester_code').val(semester_code);
        modal.find('.modal-body #semester_duration').val(semester_duration);
        modal.find('.modal-body #semester_description').val(semester_description);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #semester_id').val(semester_id);

      });
  </script>  
@endsection