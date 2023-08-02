<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aiuko</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Prompt:wght@500&family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/body.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
    
    <script src="{{ asset('js/register.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/diet-intollerances.css')}}"> 
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>