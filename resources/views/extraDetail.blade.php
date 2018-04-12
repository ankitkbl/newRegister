@extends('layouts.app')
@section('abc')
<div class="container">
 
<form method="post" action="{{ route ('extraDetail')}}">
    {{csrf_field()}}
     Mobile No.
       <input type="Number" name="mobile" placeholder="1234567890"required><br/>
       State
       <input type="text" name="state" placeholder="Delhi"required><br/>
       Country
       <input type="text" name="country" placeholder="India"required><br/>
     
       <input type="submit" name="submit" value="submit">
@endsection