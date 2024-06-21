<div class="side-menu">
    <div class="brand-name">
        <img src="{{asset('images/logo.jpeg')}}" alt="logo" id="mainlogo">
    </div>
    <ul>
        <li class="{{ Request::is('staff/dashboard') ? 'active' : '' }}"><a href="{{route('staff-dash')}}"><img src="{{asset('icons/dashboard_icon.png')}}" alt="dashboard-icon" id="sidemenu-icon">&nbsp; <span>Dashboard</span></a> </li>
        <li class="{{ Request::is('staff/dashboard/users') ? 'active' : '' }}"><a href="{{route('staff-dash-users')}}"><img src="{{asset('icons/users_icon.png')}}" alt="users-icon" id="sidemenu-icon">&nbsp;<span>Users</span></a> </li>
        <li class="{{ Request::is('staff/dashboard/user-logs') ? 'active' : '' }}"><a href="{{route('staff-dash-userlogs')}}"><img src="{{asset('icons/user-logs_icon.png')}}" alt="userlogs-icon" id="sidemenu-icon">&nbsp;<span>User Logs</span></a> </li>
        <li class="{{ Request::is('staff/dashboard/rooms') ? 'active' : '' }}"><a href="{{route('staff-dash-rooms')}}"><img src="{{asset('icons/rooms_icon.png')}}" alt="rooms-icon" id="sidemenu-icon">&nbsp;<span>Rooms</span></a> </li>
        <li class="{{ Request::is('staff/dashboard/services') ? 'active' : '' }}"><a href="{{route('staff-dash-services')}}"><img src="{{asset('icons/services_icon.png')}}" alt="services-icon" id="sidemenu-icon">&nbsp;<span>Services</span></a> </li>
        <li class="{{ Request::is('staff/dashboard/reservations') ? 'active' : '' }}"><a href="{{route('staff-dash-reservations')}}"><img src="{{asset('icons/reservations_icon.png')}}" alt="reservation-icon" id="sidemenu-icon">&nbsp;<span>Reservations</span></a> </li>
        <li class="{{ Request::is('staff/dashboard/add-staff') ? 'active' : '' }}"><a href="{{route('staff-dash-add-staff')}}"><img src="{{asset('icons/add_icon.png')}}" alt="add-icon" id="sidemenu-icon">&nbsp; <span>Add Staff</span></a> </li>
    </ul>

</div>