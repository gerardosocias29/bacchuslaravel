<!-- Menu -->
<div class="menu-wrapper center-relative">  
    <nav id="header-main-menu">
        <img class="menu-logo" src="{{ asset('images/logo@2x.png') }}" alt="{{ config('app.name', 'Bacchus') }}">
        <div class="mob-menu">MENU</div>
        <ul class="main-menu sm sm-clean">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>                    
            <li><a href="#news">News</a></li>  
            <li><a href="#support">Support</a></li>
            <li><a href="#focus">Focus</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>  

            @guest
                
            @else
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest

        </ul>
    </nav>            
</div>