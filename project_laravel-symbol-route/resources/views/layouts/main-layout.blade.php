<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Nuovo progetto</title>
</head>
<body>

    <div id="container">

        <!-- header -->
        @include('components.header')

        <!-- main -->
        @yield('content')

        <!-- footer -->
        @include('components.footer')

    </div>
    
</body>
</html>