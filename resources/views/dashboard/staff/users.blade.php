<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | Users</title>
</head>
<body>
    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')

        <div class="content">
            <div class="content-2 users-div">
                <div class="recent-payments">
                    <div class="title">
                        <h2>User Table</h2>
                    </div>
                    <table>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Created At</th>
                        </tr>
                    
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user -> user_id}}</td>
                                <td>{{$user -> user_name}}</td>
                                <td>{{$user -> user_full_name}}</td>
                                <td>{{$user -> age}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> phone_num}}</td>
                                <td>{{$user -> CreatedAt}}</td>
                            </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
