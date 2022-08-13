@extends('layouts1.app')
@section('navbar')
@section('title', 'Create page')
@section('form_create')
<head>

  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <form action="{{route('users.index')}}" method="Post">
        @csrf
        <h1>Create Form</h1>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ></input>
  </div>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
  </div> 
   
  <button type="submit" class="btn btn-primary" >Submit</button>
  </form></form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection