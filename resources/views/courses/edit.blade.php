@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->course_id], 'method' => 'patch']) !!}

                   <div class="form-group col-md-6">
                    {!! Form::label('course_name', 'Course Name:') !!}
                    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
                </div>
        
                <!-- Course Code Field -->
                <div class="form-group col-md-6">
                    {!! Form::label('course_code', 'Course Code:') !!}
                    {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
                </div>
        
                <!-- Describtion Field -->
                <div class="form-group col-md-6">
                    {!! Form::label('describtion', 'Describtion:') !!}
                    {!! Form::textarea('describtion', null, ['class' => 'form-control', 'cols' => 2, 'rows' => 5]) !!}
                </div>
        
                <!-- Status Field -->
                <div class="form-group col-md-6" >
                    {!! Form::label('status', 'Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('status', 0) !!}
                        {!! Form::checkbox('status', '1', null) !!}
                    </label>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              {!! Form::submit('Update Course', ['class' => 'btn btn-info']) !!}
            </div>
                   {!! Form::close() !!}
            </div>
        </div>
    </div>
 </div>
@endsection