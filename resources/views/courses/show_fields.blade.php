<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $course->course_name }}</p>
</div>

<!-- Course Code Field -->
<div class="form-group">
    {!! Form::label('course_code', 'Course Code:') !!}
    <p>{{ $course->course_code }}</p>
</div>

<!-- Describtion Field -->
<div class="form-group">
    {!! Form::label('describtion', 'Describtion:') !!}
    <p>{{ $course->describtion }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $course->status }}</p>
</div>

