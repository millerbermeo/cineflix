<nav class="navbar">
    <div class="navbar-container">
        <div class="content-logo"> <img class="img-logo" src="{{asset('img/logo.png')}}" /> <a href="{{ url('/') }}" class="navbar-logo">Cine Flix</a></div>
        <ul class="navbar-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/about') }}">Acerca de</a></li>
            <li><a href="{{ url('/services') }}">Servicios</a></li>
            <li><a href="{{ url('/contact') }}">Contacto</a></li>
        </ul>

        <div>
            <p>login / logout</p>  
        </div>
    </div>
</nav>

<style>
.navbar {
    background-color:rgba(0, 0, 0, 0.2);
    color: #fff;
    padding: 10px 0;
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 1000;
    position: fixed;
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
    gap: 10px

}

.img-logo {
    width: 50px;
    height: 50px
}

.navbar-logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
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
}

.navbar-links a:hover {
    text-decoration: underline;
}

/* Estilos para dispositivos móviles */
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
}
</style>