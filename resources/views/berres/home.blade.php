<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/hotelstyle.css')}}">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <script src="{{asset('js/user.js')}}" defer></script>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    <title>Berres Hotel | Home</title>
</head>
<body>
    @include('layouts.header')
    
    <div class="body-content">
        <h1>Convenient.</h1>
        <h1>Affordable.</h1>
        <h1>Relaxing.</h1>
        <p id="p1">Welcome to Berres Hotel, 
            <br>Where convenience meets affordability
            <br>and relaxation.</p>
        <a id="p2" href="{{route('reservation')}}">Reserve a Room.</a>
    </div>
    
    @include('layouts.footer')
</body>
</html>