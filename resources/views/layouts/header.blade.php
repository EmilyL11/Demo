<header id="header">
            <div class="contain">
                <div class="logo">Demo shop</div>
                <div class="menu">
                    <a style="margin-left:400px" href="{{ url('/home') }}">HOME</a>
                    <a href="{{ url('/menu') }}">MENU</a>
                </div>
                <div class="user">
                    <a style="margin-left:420px; color: white" href="{{ url('/cart') }}">CART</a>
                </div>
               
                <div>
                    <div class="user">
                            <a  style="margin-left:450px; color: white" href="{{ url('/oops') }} " >Login</a>
                            <a style="margin-left:520px; color: white" href="{{ url('/oops') }} " >Register</a>
                               
                    </div>
                    <!-- @if (Route::has('login'))
                        <div class="user">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                            @else
                                <a  style="margin-left:450px; color: white" href="{{ route('login') }}" >Login</a>

                                @if (Route::has('register'))
                                    <a style="margin-left:520px; color: white" href="{{ route('register') }}" >Register</a>
                                @endif
                            @endauth
                        </div>
                        @endif -->
                
                </div>
            </div>
        </header>