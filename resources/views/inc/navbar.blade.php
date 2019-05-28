<div class="header">
        <a class="col-md-12" href="#">
            <img class="logo" src="{{'images/joballation_logo.png'}}"  alt="Logo for Joballation">
        </a>
    <nav class="navbar navbar-expand-lg">
            <div class="navbar-nav top-nav float-right">
                @if(Auth::check())
                    <a class="nav-item nav-link" href="/dashboard">{{ Auth::user()->name }}</a>
                    <a class="logout nav-item nav-link" href="/logout">Logout</a>
                @else
                    <a class="nav-item nav-link" href="/login">Login</a>
                    <a class="register nav-item nav-link" href="/register">Register</a>
                @endif
            </div>
    </nav>
</div>