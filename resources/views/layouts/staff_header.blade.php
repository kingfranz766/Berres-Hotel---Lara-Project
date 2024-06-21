<div class="header">
    <div class="nav">
        <div class="user">
            <div class="img-case">
                <span class="material-symbols-outlined user-link" id="acc-icon">account_circle</span>
                <p id="acc-icon">{{Auth::user()-> user_name}}</p> 
            </div>

            @if ( Request::is('staff/dashboard'))
                <div id="header-title">
                    <img src="{{asset('icons/dashboard_icon.png')}}">
                    <h1>DASHBOARD</h1>
                </div>
            @elseif( Request::is('staff/dashboard/users'))
                <div id="header-title">
                    <img src="{{asset('icons/users_icon.png')}}">
                    <h1>USERS</h1>
                </div>
            @elseif( Request::is('staff/dashboard/user-logs'))
                <div id="header-title">
                    <img src="{{asset('icons/user-logs_icon.png')}}">
                    <h1>USER LOGS</h1>
                </div>
            @elseif( Request::is('staff/dashboard/rooms'))
                <div id="header-title">
                    <img src="{{asset('icons/rooms_icon.png')}}">
                    <h1>ROOMS</h1>
                </div> 
            @elseif( Request::is('staff/dashboard/services'))
                <div id="header-title">
                    <img src="{{asset('icons/services_icon.png')}}">
                    <h1>OPTIONAL SERVICES</h1>
                </div> 
            @elseif( Request::is('staff/dashboard/reservations'))
                <div id="header-title">
                    <img src="{{asset('icons/reservations_icon.png')}}">
                    <h1>RESERVATION TRANSACTIONS</h1>
                </div>
            @elseif( Request::is('staff/dashboard/add-staff'))
                <div id="header-title">
                    <img src="{{asset('icons/add_icon.png')}}">
                    <h1>ADD STAFF</h1>
                </div>  
            @endif

            <form action="{{route('staff-logout')}}" method="POST">
                @csrf
                <button type="submit" class='btn'>Logout</button>
            </form>
        </div>
    </div>
</div>