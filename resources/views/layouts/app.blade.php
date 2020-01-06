<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Trash Ninja</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        
        @if(Request::is('/'))
            @include('inc.callout')
        @endif
       
                @yield('content')
 
    </div>

    <footer id="footer" class="text-center">
        <p>&copy 2020, Cygnus Marketing Group</p>
    </footer>
</body>
</html>