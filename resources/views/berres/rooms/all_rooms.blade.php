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
 
    <title>Berres Hotel | Rooms</title>
</head>
<body class="userdash-body">
    @include('layouts.header')
    
    <div id="title">
        <h3>Our Rooms:</h1>
    </div>

    <div class="card-container">
        <div class="card">
            <img src="{{asset('images/rooms/single_room.jpg')}}" alt="single-room">
            <div class="card-content">
                <h3>{{$room1 -> RoomType}}</h3>
                <p>The Single Room is ideal for solo travelers seeking comfort and convenience. 
                    Equipped with a cozy single bed, this room offers all essential amenities for 
                    a relaxing stay.</p>
                <p class="btn">Price per Night: P{{$room1 -> PricePerNight}}</p>
            </div>
        </div>

        <div class="card">
            <img src="{{asset('images/rooms/double_room.jpg')}}" alt="double-room">
            <div class="card-content">
                <h3>{{$room2 -> RoomType}}</h3>
                <p>Perfect for couples or friends, the Double Room features a spacious layout with
                     a comfortable double bed.</p>
                <p class="btn">Price per Night: P{{$room2 -> PricePerNight}}</p>
            </div>
        </div>

        <div class="card">
            <img src="{{asset('images/rooms/triple_room.jpg')}}" alt="triple-room">
            <div class="card-content">
                <h3>{{$room3 -> RoomType}}</h3>
                <p>Ideal for small families or groups of friends, the Triple Room offers ample 
                    space and comfort with three single beds or one double and one single bed.</p>
                    <p class="btn">Price per Night: P{{$room3 -> PricePerNight}}</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>