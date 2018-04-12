@extends('layouts.app')
@section('abc')
<div class="container">
 
<form method="post" action="{{ route ('validUser')}}">
    {{csrf_field()}}
       Name:
       <input type="text" name="name" placeholder="Enter Your Name"required><br/>
       Email:
       <input type="email" name="email" placeholder="abc@gmail.com"required><br/>
       Password:
       <input type="password" name="password" placeholder="*****"required><br/>
       Confirm Password:
       <input type="password" name="password_confirmation" placeholder="*****"required><br/>
       <input type="submit" name="submit" value="submit">
@endsection