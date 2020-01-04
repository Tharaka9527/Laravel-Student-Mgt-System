@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Semesters
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($semesters, ['route' => ['semesters.update', $semesters->semester_id], 'method' => 'patch']) !!}

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
                            {!! Form::submit('Update Classroom', ['class' => 'btn btn-success']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection