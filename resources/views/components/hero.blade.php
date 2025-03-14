<div class="hero">
        <div class="overlay"></div>
        <div class="content-principal">
        <div class="content">
            <h1>John Wick 3: <br> Parabellum</h1>
            <p>John Wick is on the run after killing a member of the international assassins' guild, and with a $14 million price tag on his head, he is the target of hit men and women everywhere.</p>
            <button>WATCH TRAILER</button>
        </div>
        </div>
    </div>


<style>
    .hero {
    position: relative;
    width: 100%;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
}

.content-principal {
    width: 80%;
    margin: auto
}

.content {
    position: relative;
    color: white;
    max-width: 600px;
    padding: 20px;
    text-align: left;
}

h1 {
    font-size: 4.0rem;
    margin-bottom: 15px;
}

p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    font
}

button {
    background: red;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 4px;
}

button:hover {
    background: darkred;
}
</style>