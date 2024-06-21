<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | Reservation Transactions</title>
</head>
<body>
    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')

        <div class="content">
            <div class="content-2 users-div">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Reservation Transactions Table</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Reservation ID</th>
                            <th>Username</th>
                            <th>Room Number</th>
                            <th>Chosen Services</th>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                            <th>Total Price</th>
                            <th>Reservation Date</th>
                        </tr>
                    
                        @foreach($reservations as $res)
                            <tr>
                                <td>{{$res -> reservation_id}}</td>
                                <td>{{$res->user ? $res->user->user_name : 'N/A' }}</td>
                                <td>{{$res->room ? $res->room->RoomNumber : 'N/A' }}</td>
                                <td>{{$res -> chosen_services}}</td>
                                <td>{{$res -> CheckInDate}}</td>
                                <td>{{$res -> CheckOutDate}}</td>
                                <td>{{$res -> TotalCost}}</td>
                                <td>{{$res -> ReservationDate}}</td>
                            </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

