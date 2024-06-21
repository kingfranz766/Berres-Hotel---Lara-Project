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
  
    <title>Berres Hotel | Profile</title>
</head>
<body class="userdash-body">

    <!-- Navigation bar-->
    @include('layouts.header')

   <div class="profile-container">
        <div class="profile-name">
            <span class="material-symbols-outlined" id="profile-icon">account_circle</span>
            <h1>{{ $user->user_name }}</h1>
        </div>

        <div class="profile-content">
            <div class="profile-value">
                <label>ID</label>
                <input readonly value="{{ $user->user_id }}">   
            </div>

            <div class="profile-value">
                <label>Username</label>
                <input readonly value="{{ $user->user_name }}">
            </div>

            <div class="profile-value">
                <label>Full Name</label>
                <input id="full-name" readonly value="{{ $user->user_full_name }}">
            </div>

            <div class="profile-value"> 
                <label>Age</label>
                <input readonly value="{{ $user->age }}">
            </div>

            <div class="profile-value">
                <label>Email</label>
                <input readonly value="{{ $user->email }}">
            </div>
            
            <div class="profile-value">
                <label>Phone Number</label>
                <input readonly value="{{ $user->phone_num }}">
            </div>
        </div>
   </div>
   
    <!-- Footer-->
    @include('layouts.footer')
    
</body>
</html>