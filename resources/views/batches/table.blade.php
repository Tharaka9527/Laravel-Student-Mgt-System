<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
        <tr>
            <th>Batch</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($batches as $batch)
            <tr>
            <td>{{ $batch->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batch->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batch->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$batch->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="batch_id" id="batch_id">
            <div class="form-group">
                {!! Form::label('batch', 'Batch:') !!}
                <input type="text" name="batch" id="batch" readonly>
            </div>

            <div class="form-group">
                {!! Form::label('created_at', 'Created At:') !!}
                <input type="text" name="created_at" id="year" readonly>
            </div>

            <div class="form-group">
                {!! Form::label('updated_at', 'Updated At:') !!}
                <input type="text" name="updated_at" id="year" readonly>
            </div>
        </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      {!! Form::submit('Create batch', ['class' => 'btn btn-success']) !!}
    </div>
  </div>
  </div>
  </div>
  
  @section('scripts')
      <script>
          $('#level-show').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var batch = button.data('batch')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var batch_id = button.data('batch_id')

            var modal = $(this)


          });
      </script>
  @endsection
