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
    <link rel="stylesheet" type="text/css" href="{{asset('css/register-login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/diet-intollerances.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/caratteristiche.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/snack.css')}}">

    <link href="https://fonts.cdnfonts.com/css/believer2" rel="stylesheet">
                


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @show 
        @section('scripts')
    @show 

</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>