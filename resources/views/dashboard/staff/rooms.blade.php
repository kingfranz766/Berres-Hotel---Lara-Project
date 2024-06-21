<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | Rooms</title>
</head>
<body>
    @if(session('success'))
        <script>
            // JavaScript to display an alert
            alert("{{ session('success') }}");
        </script>
    @endif

    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')
        <div class="content">
            <div class="content-2 users-div">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Rooms Table</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Room ID</th>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>Price Per Night</th>
                            <th>Availability</th>
                        </tr>
                    
                        @foreach($rooms as $room)
                            <tr>
                                <td>{{$room -> room_id}}</td>
                                <td>{{$room -> RoomNumber }}</td>
                                <td>{{$room -> RoomType}}</td>
                                <td>₱{{$room -> PricePerNight}}</td>
                                <td>{{$room -> Availability}}</td>
                            </tr>
                       @endforeach
                    </table>

                    <div id="update-room-div">
                        <form action="{{route('update-room')}}" method="POST">
                            @csrf
                            <button class = "btn" id="update-btn" type="submit">Update Room  Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

