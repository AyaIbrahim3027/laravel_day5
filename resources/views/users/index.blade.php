@extends("layouts1.app")
@section('navbar')
@section('title', 'List users page')
@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Post count</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th>{{ $user['id'] }}</th>
            <td> <a href="{{ route('users.show', $user['id'] )}}"> {{ $user['name'] }} </a></td>
            <td>{{ $user['email'] }}</td>
            <td> {{ $user['posts_count'] }} </td>
          
            
            <td>
            <form action="{{route('users.destroy', $user['id'] )}}" method="POST">
                <a class="btn btn-primary" href="{{route('users.edit', $user['id'] )}}">Edit</a>
                    @method('DELETE')
                    @csrf
                <a class="btn btn-danger" >Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

@endsection