<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berres Hotel | Login</title>
    <link rel="stylesheet" href="{{asset('css/hotelstyle.css')}}">
    <link rel="icon" type="images/x-icon" href={{asset('images/logo.jpeg')}}>
    <script src="{{asset('js/scripts.js')}}" defer></script>
        
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body class="show-popup">
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
    
    <!-- Navigation bar-->
    @include('layouts.header')

    <!-- Log-in/Signup Form -->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">Close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome to Berres Hotel</h2>
                <p>Log-in to get started.</p>
            </div>

            <div class="form-content">
                <h2 id="text-header">LOG-IN</h2>
                <form method="POST" action="{{route('authenticate')}}">
                    @csrf
                    <div class="input-field">
                        <input type="text" required name="user_type" id="user_type" value="Regular Customer">
                        <label>Type</label>
                        <select name="user_type" id="UserType" class="options">
                            <option value="Regular Customer">Regular</option>
                            <option value="Staff Member">Staff</option> 
                        </select>
                    </div>

                    <div class="input-field">
                        <input type="text" required name="email" id="email">
                        <label>Email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" required name="password" id="password">
                        <label>Password</label>
                    </div>

                    <div class="show-pass">
                        <input type="checkbox" onclick="showPass()"> Show Password
                    </div>

                    <button type="submit">Log-In</button>
                </form>

                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup Here</a>
                </div>
            </div>
        </div>

        <div class="form-box signup">
            <div class="form-details">
                <h2>Create an Account</h2>
                <p>To get full access of the website you need to create an account.</p>
            </div>

            <div class="form-content">
                <h2 id="text-header">SIGN-UP</h2>
                <form method="POST" action="{{route('signup-success')}}">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="user_full_name" required>
                        <label>Enter Full Name</label>
                    </div>

                    <div class="input-field">
                        <input type="number" name="age" maxlength="2" oninput="this.value = this.value.slice(0, 2)" required>
                        <label>Enter Age</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="user_name" required>
                        <label>Create Username</label>
                    </div>

                    <div class="input-field">
                        <input type="email" name="email" required>
                        <label>Enter Email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Create Password</label>
                    </div>

                    <div class="input-field">
                        <input id="phoneInput" type="text" name="phone_num" minlength ="11" maxlength="11" oninput="this.value = this.value.slice(0, 11)" required>
                        <label>Enter Phone Number</label>
                    </div>

                    @if ($errors->any())
                        <script>
                            alert("{{ $errors->first() }}");
                        </script>
                    @endif
                    <button type="submit" id="signup-submit">Create Account</button>

                </form>

                <div class="bottom-link">
                    Already have an account?
                    <a href="#" id="login-link">Login Here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="body-content">
        <h1>Convenient.</h1>
        <h1>Affordable.</h1>
        <h1>Relaxing.</h1>
        <p id="p1">Welcome to Berres Hotel, 
            <br>Where convenience meets affordability
            <br>and relaxation.</p>
        <a id="p2">Log-in now to get started!</a>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
