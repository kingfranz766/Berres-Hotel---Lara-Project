<header>
    <nav class="navbar">
        <span class="menu-btn material-symbols-rounded">Menu</span>
        <a href="{{route('home')}}" class="logo">
            <img src="{{asset('images/logo.jpeg')}}" alt="logo" id="mainlogo">
        </a>

        <ul class="links">
            <span class="close-btn material-symbols-rounded">Close</span>
             @guest
            <li><a href="{{route('login')}}" class="{{ Request::is('login') ? 'active' : '' }}">Home</a></li>
            @endguest

            @auth
                    <li><a href="{{route('home')}}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{route('reservation')}}" class="{{ Request::is('user/reservation') ? 'active' : '' }}">Reserve a Room</a></li>
            @endauth
                
            <li><a href="{{route('all_rooms')}}" class="{{ Request::is('rooms') ? 'active' : '' }}">Rooms</a></li>
            <li><a href="{{route('all_services')}}" class="{{ Request::is('services') ? 'active' : '' }}">Services </a></li>
            <li><a href="{{route('policy')}}" class="{{ Request::is('policy') ? 'active' : '' }}">Policy</a></li>
        
            
        </ul>
        @guest
            <button class="login-btn">Log-in</button>
        @endguest
        
        @auth
            <div class="user-container">
                <ul>
                    <li><span class="material-symbols-outlined user-link" id="acc-icon">account_circle</span> 
                        <ul class="dropdown">
                            <li><p class="user-link" id="user-name-link">{{ Auth::user()->user_name }}</p></li>
                            <li><a href="{{route('user-transactions')}}" class="user-link">Transactions</a></li>
                            <li><a href="{{route('user-profile')}}" class="user-link">Profile</a></li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" id="logout-btn">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endauth
    </nav>
</header>