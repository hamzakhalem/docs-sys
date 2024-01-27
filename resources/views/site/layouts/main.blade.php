<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css"') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css"') }}">
    <title>Docsys</title>
</head>
<body>
    
<div class="content">
    <div class="container">
        @yield('content')
    </div>
</div>


@yield('js')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>