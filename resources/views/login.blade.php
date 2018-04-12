@extends('layouts.app')
@section('abc')
<div class="container">
    <form method="post" action="{{ route ('loginForm')}}">
        {{csrf_field()}}
            Enter Email:
            <input type="email" name="email" placeholder="abc@gmail.com"><br/>
            Enter Password:
            <input type="password" name="password" placeholder="*****"><br/>
            <input type="submit" name="submit" value="submit">
    </form>
</div>
@endsection