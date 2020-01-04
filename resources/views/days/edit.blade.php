@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Day:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="button">Close</button>
                        {!! Form::submit('Update Days', ['class' => 'btn btn-info']) !!}
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection