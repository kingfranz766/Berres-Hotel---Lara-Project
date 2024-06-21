<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | Optional Services</title>
</head>
<body>
    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')

        <div class="content">
            <div class="content-2 users-div">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Optional Services Table</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Service ID</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Price Per Night</th>
                        </tr>
                    
                        @foreach($services as $serv)
                            <tr>
                                <td>{{$serv -> service_id}}</td>
                                <td>{{$serv -> service_name }}</td>
                                <td>{{$serv -> service_desc}}</td>
                                <td>₱{{$serv -> service_price}}</td>
                            </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

