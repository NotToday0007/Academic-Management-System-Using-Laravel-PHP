@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>enroll_no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>batch_id</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
        <label>student_id</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>
        <label>join_date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        <label>fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
      
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop