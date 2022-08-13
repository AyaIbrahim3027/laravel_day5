@extends('layouts1.app')
@section('navbar')
@section('post_content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Posts deleted</div>

<div class="card-body">

@if ($posts->count()>0)
<table class="table table-striped">
<thead>
<tr>
<th > Id </th>
<th > Title </th>
<th > Description </th>
<th > Restore </th> 
</tr>
</thead>
<tbody>
                                 
@foreach ($posts as $post)
<tr>
<th >{{$post['id']}}</th>
<th >{{$post['title']}}</th>
<th >{{$post['body']}}</th>
<td> 
<a  href="{{ route('post.restore', $post->['id'] )}}">  
<i class="fas fa-edit"></i></a>  
</td>
<td> 
<a  href="{{route('post.restore',$post->['id'] )}}">
<button type="button" class="btn btn-success">Restore</button>
</a>
</td> 
</tr>
@endforeach   
   
@endif

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection