<html>
    <head>
    <head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
        <title>
            App - @yield ('title')
        </title>
    </head>
    <body>
        @section('navbar')
        @include('includes.navbar')
        @show

        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            @yield('form_create')
        </div>

        <div class="container">
            @yield('form_edit')
        </div>

        
        

        <div class="container">
            @yield('post_content')
        </div>

        <div class="container">
            @yield('post_create')
        </div>

        <div class="container">
            @yield('post_edit')
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
    </body>
</html>