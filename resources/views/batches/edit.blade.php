@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                   <div class="form-group">
                    {!! Form::label('batch', 'Batch year:') !!}
                    {!! Form::text('batch', null, ['class' => 'form-control']) !!}
                    </div>
            
                    </div>
                    <div class="modal-footer">
                    {!! Form::submit('Update Batch', ['class' => 'btn btn-info']) !!}
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection