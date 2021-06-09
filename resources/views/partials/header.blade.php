<header>    

        {{-- Header Top  --}}
        <div class="header-top">
            <div class="container">

                <ul class="header-top-nav">
                    <li>
                        <a href="#">DC Power™ Visa®</a>
                    </li>

                    <li>
                        <a href="#">Additional DC Sites &#9660</a>
                    </li>
                </ul>

            </div>
        </div>

        {{-- Header Nav --}}
        <nav>
            <div class="container">

                {{-- Logo --}}
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
                </div>

                {{-- Menu --}}
                <ul class="menu">
                    <li>
                        <a href="#">Characters</a>
                    </li>
                    <li class="{{Request::route()->getName() == 'home' || Request::route()->getName() == 'single' ? 'active' : ''}}">
                        <a href="{{ route('home') }}">Comics</a>
                    </li>
                    <li class="{{Request::route()->getName() == 'movies' ? 'active' : ''}}">
                        <a href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li>
                        <a href="#">TV</a>
                    </li>
                    <li>
                        <a href="#">Games</a>
                    </li>
                    <li>
                        <a href="#">Collectibles</a>
                    </li>
                    <li>
                        <a href="#">Videos</a>
                    </li>
                    <li>
                        <a href="#">Fans</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Shop <span>&#9660</span></a>
                    </li>
                </ul>

                {{-- Search --}}
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span class="search-icon"><i class="fas fa-search"></i></span>
                </div>

            </div>            
        </nav>

        {{-- Banner --}}
        <div class="banner"></div>
        
</header>