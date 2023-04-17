  
    <header>
        <a href="{{route('landing_page')}}">
            <h1 class="logo">logo</h1>
        </a>
        <ul class="navbar">
            <li><a href="{{route('landing_page')}}">HOME</a></li>
            <li><a href="#">PAGES</a></li>
            <li><a href="{{route('shop')}}">SHOP</a></li>

            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">DASHBOARD</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">LOG IN</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">REGISTER</a>
                    @endif
                @endauth
            </div>
        @endif
        </ul>
        <div class="h-icons">
            <a href="{{route('bag')}}"><i class='bx bxs-shopping-bag' style='color:#ffffff'></i></a>
            <a href="#"><i class='bx bxs-phone' style='color:#ffffff'></i></i></a>
            <a href="#"><i class='bx bxs-heart' style='color:#ffffff'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>