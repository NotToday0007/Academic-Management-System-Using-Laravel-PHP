@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $enrollments->name }}</h5>
        <p class="card-text">enroll_no : {{ $enrollments->enroll_no }}</p>
        <p class="card-text">batch_id: {{ $enrollments->batch->name }}</p>
        <p class="card-text">student name : {{ $enrollments->student->name }}</p>
        <p class="card-text">join_date: {{ $enrollments->join_date }}</p>
        <p class="card-text">fee: {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
