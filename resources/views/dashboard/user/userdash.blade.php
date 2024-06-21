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

    <title>Berres Hotel | Your Transactions</title>
</head>
<body class="userdash-body">
    <!-- Navigation bar-->
    @include('layouts.header')
    <div class="transaction-wrapper">
        <div class="transaction-container">
            <table >
                <caption>Your Transactions</caption>
                <tr>
                    <th>Reservation ID</th>
                    <th>Room Type</th>
                    <th>Room Number</th>
                    <th>Chosen Services</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Total Price</th>
                    <th>Reservation Date</th>
                </tr>

                @foreach ($reservations as $reservation)
                    <tr>
                        <td data-cell="Reservation ID">{{ $reservation->reservation_id }}</td>
                        <td data-cell="Room Type">{{ $reservation->room ? $reservation->room->RoomType : 'N/A' }}</td>
                        <td data-cell="Room Number">{{ $reservation->room ? $reservation->room->RoomNumber : 'N/A' }}</td>
                        <td data-cell="Chosen Services">{{ $reservation->chosen_services }}</td>
                        <td data-cell="Check-in Date">{{ $reservation->CheckInDate }}</td>
                        <td data-cell="Check-out Date">{{ $reservation->CheckOutDate }}</td>
                        <td data-cell="Total Price">{{ $reservation->TotalCost }}</td>
                        <td data-cell="Reservation Date">{{ $reservation->ReservationDate }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- Footer -->
    @include('layouts.footer')
    
</body>
</html>