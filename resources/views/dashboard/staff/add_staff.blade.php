<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <link rel="stylesheet" href={{asset("css/dashboardstyles.css")}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Berres Hotel | Add Staff</title>
</head>
<body>
    @if(session('success'))
        <script>
            // JavaScript to display an alert
            alert("{{ session('success') }}");
        </script>
    @endif

    @if(session('alert'))
        <script>
            // JavaScript to display an alert
            alert("{{ session('alert') }}");
        </script>
    @endif

    @if(session('error'))
        <script>
            // JavaScript to display an alert
            alert("{{ session('error') }}");
        </script>
    @endif

    @if ($errors->any())
            <script>
                alert("{{ $errors->first() }}");
            </script>
    @endif

    @include('layouts.side_menu')
    <div class="container">
        @include('layouts.staff_header')
        <div class="content">
            <div class="content-2 users-div">
                <div class="add-staff">
                    <div class="title">
                        <h2>Staff Form</h2>
                    </div>

                    <div class="staff-form-container">
                        <form action="{{route('create-staff')}}" method="POST">
                            @csrf
                            <div class ="staff-form">
                                <label for="staff_name">Enter Full Name:</label>
                                <input type="text" name="staff_name" required>

                                <label for="age">Enter Age:</label>
                                <input type="number" name="age" maxlength="2" oninput="this.value = this.value.slice(0, 2)" required>
                                
                                <label for="user_name">Create Username:</label>
                                <input type="text" name="user_name" required>

                                <label for="email">Enter Email:</label>
                                <input type="email" name="email" required>

                                <label for="password">Create Password:</label>
                                <input type="password" name="password" required>

                                <label for="phone_num">Enter Phone Number:</label>
                                <input id="phoneInput" type="text" name="phone_num" minlength ="11" maxlength="11" oninput="this.value = this.value.slice(0, 11)" required>

                                <button class="btn staff-btn" type="submit">ADD STAFF</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>

