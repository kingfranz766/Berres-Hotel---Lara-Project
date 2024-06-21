<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | Staff Dashboard</title>
</head>
<body>
    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')

        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>{{$users-> count()}}</h1>
                        <h3><a href="{{route('staff-dash-users')}}">Users</a></h3>
                    </div>
                    <div class="icon-case">
                        <img src='{{asset("icons/users_icon.png")}}' alt="users" id="cards-icon">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>{{$rooms-> count()}}</h1>
                        <h3><a href="{{route('staff-dash-rooms')}}">Rooms</a></h3>
                    </div>
                    <div class="icon-case">
                        <img src='{{asset("icons/rooms_icon.png")}}' alt="rooms" id="cards-icon">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>{{$services-> count()}}</h1>
                        <h3><a href="{{route('staff-dash-services')}}">Services</a></h3>
                    </div>
                    <div class="icon-case">
                        <img src='{{asset("icons/services_icon.png")}}' alt="services" id="cards-icon">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>{{$reservations-> count()}}</h1>
                        <h3><a href="{{route('staff-dash-reservations')}}">Reservations</a></h3>
                    </div>
                    <div class="icon-case">
                        <img src='{{asset("icons/reservations_icon.png")}}' alt="reservations" id="cards-icon">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>₱{{$totalcost}}</h1>
                        <h3>Total Sales</h3>
                    </div>
                    <div class="icon-case">
                        <img src='{{asset("icons/income_icon.png")}}' alt="income" id="cards-icon">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Reservations</h2>
                        <a href="{{route('staff-dash-reservations')}}" class="btn">View All Reservations</a>
                    </div>
                    <table>
                        <tr>
                            <th>Reservation ID</th>
                            <th>User</th>
                            <th>Room Number</th>
                            <th>Total Price</th>
                        </tr>

                        @foreach($recentReservations as $recent)
                            <tr>
                                <td>{{$recent->reservation_id}}</td>
                                <td>{{$recent->user ? $recent->user->user_name : 'N/A' }}</td>
                                <td>{{$recent->room ? $recent->room->RoomNumber : 'N/A' }}</td>
                                <td>₱{{$recent->TotalCost}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Users</h2>
                        <a href="{{route('staff-dash-users')}}" class="btn">View All Users</a>
                    </div>
                    <table>
                        <tr>
                            <th>Full name</th>
                            <th>Age</th>
                            <th>Email</th>
                        </tr>

                        @foreach($recentUsers as $recent)
                            <tr>
                                <td id="full-name">{{$recent->user_full_name}}</td>
                                <td>{{$recent->age}}</td>
                                <td id="email">{{$recent->email}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>