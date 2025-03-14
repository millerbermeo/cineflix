function filtrarPeliculas() {
    const input = document.getElementById('buscarPelicula');
    const filter = input.value.toLowerCase();
    const peliculas = document.querySelectorAll('.movie-card');

    peliculas.forEach(pelicula => {
        const titulo = pelicula.querySelector('.movie-title').textContent.toLowerCase();
        pelicula.style.display = titulo.includes(filter) ? '' : 'none';
    });
}

