@extends("layouts1.app")
@section('navbar')
@section('title', 'List post page')
@section('post_content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show post</h2>
            </div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $post['id'] }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post['title'] }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post['body'] }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>owner:</strong>
                @foreach ($post->users as $user)
                  <p> {{ $user['name'] }} </p> <br>
                @endforeach  
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="{{ Storage::disk('public')->url($posts['image']) }}">
            </div>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>

    </div>
















@endsection