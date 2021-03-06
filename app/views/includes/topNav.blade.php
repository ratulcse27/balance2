<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}">{{ Config::get('myConfig.siteName') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                    <li><a href="{{ URL::route('login') }}">Login</a></li>
                    <li><a href="{{ URL::route('register') }}">Register</a></li>
                @else

                    <!-- admin -->
                    @if(Session::get('role') == 1)
                        <li><a href="{{ URL::route('members') }}">Membership Request</a></li>
                        <li><a href="{{ URL::route('pin') }}">Pin</a></li>
                    @elseif(Session::get('role') == 2)
                        <li><a href="{{ URL::route('distributors') }}">View Pins</a></li>
                         <li><a href="{{ URL::route('info.show',Auth::user()->id) }}">Profile</a></li>
                    @elseif(Session::get('role') == 3)
                        <li><a href="{{ URL::route('client.add') }}">Enter Pin</a></li>
                        <li><a href="{{ URL::route('info.show',Auth::user()->id) }}">Profile</a></li>

                    @endif

                    <!-- <li><a href="#">Profile</a></li> -->
                    <li><a href="{{ URL::route('user.update') }}">Account Update</a></li>
                    <li><a href="{{ URL::route('logout') }}">Logout</a></li>

                @endif
            </ul>
        </div>
    </div>
</nav>