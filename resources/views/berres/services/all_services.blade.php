<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/hotelstyle.css')}}">
    <script src="{{asset('js/user.js')}}" defer></script>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
 
    <title>Berres Hotel | Services</title>
</head>
<body class="userdash-body">
    @include('layouts.header')
    
    <div id="title">
        <h3>Our Services (Optional):</h1>
    </div>

    <div class="card-container services-container">
        <div class="card">
            <img src="{{asset('images/services/breakfast.jpg')}}" alt="breakfast">
            <div class="card-content">
                <h3>{{ $service1 -> service_name}}</h3>
                <p>
                   {{ $service1 -> service_desc}}
                </p>
                <p class="btn">Price Per Day: P{{$service1 -> service_price}}</p>
            </div>
        </div>

        <div class="card">
            <img src="{{asset('images/services/minibar.jpg')}}" alt="mini-bar">
            <div class="card-content">
                <h3>{{ $service2 -> service_name}}</h3>
                <p> {{ $service2 -> service_desc}}</p>
                <p class="btn">Price Per Day: P{{$service2 -> service_price}}</p>
            </div>
        </div>

        <div class="card">
            <img src="{{asset('images/services/amenities.jpg')}}" alt="in-room-amenities">
            <div class="card-content">
                <h3>{{ $service3 -> service_name}}</h3>
                <p>{{ $service3 -> service_desc}}</p>
                <p class="btn">Price Per Day: P{{$service3 -> service_price}}</p>
            </div>
        </div>

        <div class="card">
            <img src="{{asset('images/services/laundry.jpg')}}" alt="laundry">
            <div class="card-content">
                <h3>{{ $service4 -> service_name}}</h3>
                <p>{{ $service4 -> service_desc}}</p>
                <p class="btn">Price Per Day: P{{$service4 -> service_price}}</p>
            </div>
        </div>

        <div class="card">
            <img src="{{asset('images/services/fitness.jpg')}}" alt="fitness">
            <div class="card-content">
                <h3>{{ $service5 -> service_name}}</h3>
                <p>{{ $service5 -> service_desc}}</p>
                <p class="btn">Price Per Day: P{{$service5 -> service_price}}</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>