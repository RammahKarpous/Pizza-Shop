<nav class="nav main-nav">
    <div class="wrapper">
        @auth
            <ul class="nav__ul">
                <li class="nav__li"><a href="/home" class="nav__link">Home</a></li>
                <li class="nav__li">
                    <a href="/basket" class="nav__link nav__link--basket"><img src="{{ asset('images/icons/shopping-basket.svg') }}" alt="Shopping basket">
                        <div class="nav__shopping-cart-count">
                            <h4 class="nav__cart-count">5</h4>
                        </div>
                    </a>
                </li>
            </ul>
        @else
            <ul class="nav__ul">
                <li class="nav__li"><a href="/" class="nav__link">Home</a></li>
                <li class="nav__li"><a href="/login" class="nav__link">Login</a></li>
                <li class="nav__li"><a href="/register" class="nav__link">Register</a></li>
                <li class="nav__li">
                    <a href="/basket" class="nav__link nav__link--basket"><img src="{{ asset('images/icons/shopping-basket.svg') }}" alt="Shopping basket">
                        <div class="nav__shopping-cart-count">
                            <h4 class="nav__cart-count">5</h4>
                        </div>
                    </a>
                </li>
            </ul>
        @endauth
    </div>
</nav>
