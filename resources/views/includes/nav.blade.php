<nav class="nav main-nav">
    <div class="wrapper">
        @auth
            <ul class="nav__ul">
                <li class="nav__li"><a href="/" class="nav__link">Home</a></li>
                <li class="nav__li">
                    <a href="/basket" class="nav__link nav__link--basket"><img
                            src="{{ asset('images/icons/shopping-basket.svg') }}" alt="Shopping basket">
                        <div class="nav__shopping-cart-count">
                            <h4 class="nav__cart-count">5</h4>
                        </div>
                    </a>
                </li>
                <li class="nav__li dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav__link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        @else
            <ul class="nav__ul">
                <li class="nav__li"><a href="/" class="nav__link">Home</a></li>
                <li class="nav__li"><a href="{{ route('login') }}" class="nav__link">Login</a></li>
                <li class="nav__li"><a href="{{ route('register') }}" class="nav__link">Register</a></li>
                <li class="nav__li">
                    <a href="#" class="nav__link nav__link--basket"><img
                            src="{{ asset('images/icons/shopping-basket.svg') }}" alt="Shopping basket">
                        <div class="nav__shopping-cart-count">
                            <h4 class="nav__cart-count">5</h4>
                        </div>
                    </a>
                </li>
            </ul>
        @endauth
    </div>
</nav>
