<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | User Logs</title>
</head>
<body>
    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')

        <div class="content">
            <div class="content-2 users-div">
                <div class="recent-payments">
                    <div class="title">
                        <h2>User Logs Table</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Reference ID</th>
                            <th>Username</th>
                            <th>Log-in Date</th>
                            <th>Log-in Time</th>
                            <th>Log-out Time</th>
                        </tr>
                    
                        @foreach($userlogs as $log)
                            <tr>
                                <td>{{$log -> reference_id}}</td>
                                <td>{{$log->user ? $log->user->user_name : 'N/A' }}</td>
                                <td>{{$log -> LoginDate}}</td>
                                <td>{{$log -> LoginTime}}</td>
                                <td>{{$log -> LogoutTime}}</td>
                            </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
