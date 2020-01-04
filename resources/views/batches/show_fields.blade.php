<!-- Batch Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{$batch->id}}</p>
</div>

<div class="form-group">
    {!! Form::label('batch', 'Batch:') !!}
    <p>{{$batch->year}}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{$batch->created_at}}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{$batch->updated_at}}</p>
</div>