<nav class="navbar">
    <div class="navbar-container">

        <div class="content-logo">
            <img class="img-logo" src="{{ asset('img/logo.png') }}" />
            <a href="{{ url('/') }}" class="navbar-logo">Cine Flix</a>
        </div>

        <ul class="navbar-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/') }}">Acerca de</a></li>
            <li><a href="{{ url('/') }}">Servicios</a></li>
        </ul>
     
        <div class="auth-buttons">
            @if(Auth::check())
                <a href="{{ route('logout') }}" 
                   class="auth-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="auth-link">Login</a>
            @endif
        </div>
    </div>
</nav>

<style>

.navbar {
    background-color: rgba(0, 0, 0, 0.33);
    color: #fff;
    padding: 10px 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 7;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 80%;
    margin: 0 auto;
    padding: 0 20px;
}

.content-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.img-logo {
    width: 50px;
    height: 50px;
}

.navbar-logo {
    font-size: 24px;
    font-weight: bold;
    color: red;
    text-decoration: none;
}


.navbar-links {
    list-style: none;
    display: flex;
}

.navbar-links li {
    margin-left: 20px;
}

.navbar-links a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    transition: color 0.3s ease;
}

.navbar-links a:hover {
    text-decoration: underline;
    color: #ddd;
}


.auth-buttons {
    margin-left: 20px;
}

.auth-link {
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    padding: 8px 16px;
    background-color: red;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.auth-link:hover {
    background-color: darkred;
    color: #ddd;
}

/* dispositivos moviles */
@media screen and (max-width: 768px) {
    .navbar-links {
        display: none;
        width: 100%;
        flex-direction: column;
        align-items: center;
    }

    .navbar-links li {
        margin: 10px 0;
    }

    .navbar-container.active .navbar-links {
        display: flex;
    }

    .auth-buttons {
        margin-top: 10px;
    }

    .auth-link {
        width: 100%;
        text-align: center;
        margin-top: 5px;
    }
}
</style>
