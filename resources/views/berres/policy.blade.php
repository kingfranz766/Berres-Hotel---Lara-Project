<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{asset('css/hotelstyle.css')}}">
    <script src="{{asset('js/user.js')}}" defer></script>
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    <title>Berres Hotel | Policy</title>
</head>
<body>
    @include('layouts.header')

    <div class="blur-bg-overlay" id="signup-success-blur"></div>
    <div class="signup-success-form policy-form">
        <h2>Policy</h2>

        <div class="cancel-text">
            <p>
                The holder of the card with which the reservation was made must be present at check-in, sign the vouchers and show an official identification. In case you are using a card of a person not present at the time of check in, you must provide another means of payment, both for the charges made in guarantee and for the charges that complete the payment of your reservation.
            </p>

            <p>
                <b>Payments:</b> For webexclusive fares 100% of the total of the reservation will be charged at the moment of its confirmation. Standard rate will be charged at the reception upon arrival.
            </p>

            <p>
                <b>Cancellation charges:</b> If you cancel your reservation 48 hrs before the day of arrival cancellation will be free of charge. If canceled within 48 hours prior to arrival, the first night will be charged
                <br>
            </p>

            <p>
                <b>No Show:</b> Two first night will be charged. <br>
                <b>Cards accepted:</b> Visa and MasterCard/ <b>Alternatives:</b> Cash on hand, Gcash, Paypal.
            </p>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>