@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">payments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
       


        <h5 class="card-title">Enroll id : {{ $payments-> enrollment_id }}</h5>
       
        <p class="card-text">paid date : {{ $payments->paid_date }}</p>
        <p class="card-text">Amount : {{ $payments->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection