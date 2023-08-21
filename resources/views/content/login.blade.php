<!DOCTYPE html>
<html lang="en">

@extends('master');
@section('title','Login Page');


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@section('content')
  <<h1 class="mx-3">Login</h1>
  <form action="{{url('login')}}" method="post">
   @csrf
   <div class="mb-3">
       <label for="exampleInputEmail">Email address:</label>
       <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
      
   </div>
   <div class="mb-3">
       <label for="exampleInputPassword1">Password:</label>
       <input type="password" class="form-control" id="password" name="password">
       @error('email')
       <div class = "invalid-feedback-d-block">{{$errors->first('password')}}</div>

       @enderror
   </div>
   <button type="Submit" class="btn btn-primary">Login</button>
  </form>
@endsection
<body>

</body>
</html>
