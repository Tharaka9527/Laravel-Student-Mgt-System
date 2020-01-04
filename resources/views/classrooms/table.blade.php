<div class="table-responsive">
    <table class="table" id="classrooms-table">
        <thead>
            <tr>
                <th>Classroom Name</th>
                <th>Classroom Code</th>
                <th>Classroom Description</th>
                <th>Classroom Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classrooms as $classroom)
            <tr>
            <td>{{ $classroom->classroom_name }}</td>
            <td>{{ $classroom->classroom_code }}</td>
            <td>{{ $classroom->classroom_description }}</td>
            <td>
                @if($classroom->classroom_status = 1)
                <span class="text-success">Available</span>
                @else
                <span class="text-danger">Unavalable</span>
                @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['classrooms.destroy', $classroom->classroom_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a data-toggle="modal" data-target="#classroom-view-modal" 
                            data-classroom_name="{{$classroom->classroom_name}}"
                            data-classroom_code="{{$classroom->classroom_code}}"
                            data-classroom_status="{{$classroom->classroom_status}}"
                            data-classroom_description="{{$classroom->classroom_description}}"
                            data-created_at="{{$classroom->created_at}}" 
                            data-updated_at="{{$classroom->updated_at}}" 
                            data-classroom_id="{{$classroom->classroom_id}}" 
                            class='btn btn-warning btn-xs'>
                           <i class="glyphicon glyphicon-eye-open"> Show</i></a>

                        <a href="{{ route('classrooms.edit', [$classroom->classroom_id]) }}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
    input:read-only{
        border: none;
        border-color: transparent;
    }
</style>

<div class="modal fade" id="classroom-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <input type="hidden" name="classroom_id" id="classroom_id">

        <!-- Classroom Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('classroom_name', 'Classroom Name:') !!}
            <input type="text" name="classroom_name" id="classroom_name" readonly>
        </div>

        <!-- Classroom Code Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('classroom_code', 'Classroom Code:') !!}
            <input type="text" name="classroom_code" id="classroom_code" readonly>
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('classroom_status', 'Classroom Status:') !!}
            <input type="text" name="classroom_status" id="classroom_status" readonly>
        </div>

        <!-- Classroom Description Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('classroom_description', 'Classroom Description:') !!}
            <input type="text" name="classroom_description" id="classroom_description" readonly>
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('created_at', ' Created At:') !!}
            <input type="text" name="created_at" id="created_at" readonly>
        </div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <input type="text" name="updated_at" id="updated_at" readonly>
        </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

@section('scripts')
  <script>
      $('#classroom-view-modal').on('show.bs.modal', function(event){
        
        var button = $(event.relatedTarget)
        var classroom_name = button.data('classroom_name')
        var classroom_code = button.data('classroom_code')
        var classroom_status = button.data('classroom_status')
        var classroom_description = button.data('classroom_description')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var classroom_id = button.data(classroom_id)

        var modal = $(this)

        modal.find('.modal-title').text('VIEW CLASSROOM INFORMATION');
        modal.find('.modal-body #classroom_name').val(classroom_name);
        modal.find('.modal-body #classroom_code').val(classroom_code);
        modal.find('.modal-body #classroom_status').val(classroom_status);
        modal.find('.modal-body #classroom_description').val(classroom_description);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #classroom_id').val(classroom_id);

      });
  </script>  
@endsection