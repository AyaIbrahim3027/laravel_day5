@extends('layouts1.app')
@section('navbar')
@section('title', 'Edit post page')
@section('post_edit')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<form action="{{ route('posts.update',$post['id'] )}}" method="POST">
        @method('Put')
        @csrf
        <h1>Edit Post</h1>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post['title']}}"></input>
    </div>

    @error('title')
   <p style="color: red;"> Title must be less than 100 character </p>
   @enderror

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" name="body" class="form-control" id="exampleInputPassword1" value="{{$post['body']}}" > </input>
    </div>

    @error('body')
   <p style="color: red;"> Description must be less than 1000 character </p>
   @enderror

    <div class="mb-3">
        <label for="enabled" class="form-label" >Enabled</label>
        <input type="text" name="enabled" class="form-control" id="enabled" value="{{$post['enabled']}}">
      </div>

    <button type="submit" class="btn btn-primary" >Submit</button>
    </form>   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection