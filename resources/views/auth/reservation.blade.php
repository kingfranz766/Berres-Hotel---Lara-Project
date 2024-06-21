<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/hotelstyle.css')}}">
    <link rel="icon" type="images/x-icon" href="{{asset('images/logo.jpeg')}}">
    <script src="{{asset('js/user.js')}}" defer></script>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
  
    <title>Berres Hotel | Reserve a Room</title>
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
    
    <!-- Navigation bar-->
    @include('layouts.header')

    <!-- Reservation Form -->
    <div class="blur-bg-overlay" id ="r-blur"></div>
    <div class="reservation-form" id="reservation-form-id">
        <div class="reservation-box">
            <div class="reservation-details">
                <h2>Reserve a Room</h2>
                <p>Fill up the form to do a transaction.</p>
            </div>

            <div class="reservation-content">
                <h2 id="text-header">RESERVATION</h2>
                <form method="POST" action="{{route('reservations.store')}}">
                    @csrf
                    <div class="input-field">
                        <input class ="reservation-input" type="text" required id="chosen-room"  value="Single Room">
                        <label>Choose Room Type:</label>
                        <select name="room_type" id="Rooms" class="options">
                            <option value="Single Room">Single</option>
                            <option value="Double Room">Double</option> 
                            <option value="Triple Room">Triple</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <input class ="reservation-input" type="text" name = "chosen_service_ids" value="No services" id="chosen-services">
                        <label>Choose Services (Optional):</label>
                        <span class="material-symbols-outlined search-icon service-search" id="openModalBtn">search</span>
                    </div>

                    <div class="input-field">
                        <input type="date" required name="CheckInDate" id="CheckInDate">
                        <label>Check-In Date:</label>
                    </div>

                    <div class="input-field">
                        <input type="date" required name="CheckOutDate" id="CheckOutDate">
                        <label>Check-Out Date:</label>
                    </div>

                    <button type="submit">Reserve</button>

                    <!-- Dropdown placed outside the reservation form -->
                    <div class="dropdown" id="dropdown">
                        <input type="hidden" name="chosen-services[]" value="none"> <!-- Hidden input for default value -->
                        @foreach($services as $service)
                            <label><input type="checkbox" value="{{ $service->service_name }}"  name="chosen-services[]" class="service-checkbox" data-price="{{ $service->service_price }}">{{ $service->service_name }}</label>
                        @endforeach 
                    </div>

                    <input type="hidden" name="total-price" id="total-price-input">
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const checkboxes = document.querySelectorAll('.service-checkbox');
            const totalPriceInput = document.querySelector('#total-price-input');

            checkboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    updateTotalPrice();
                });
            });

            function updateTotalPrice() {
                let totalPrice = 0;

                checkboxes.forEach(function (checkbox) {
                    if (checkbox.checked) {
                        let servicePrice = parseFloat(checkbox.dataset.price);
                        totalPrice += servicePrice;
                    }
                });

                totalPriceInput.value = totalPrice.toFixed(2);
            }
        });
    </script>

    <!-- Footer-->
    @include('layouts.footer')  
</body>
</html>