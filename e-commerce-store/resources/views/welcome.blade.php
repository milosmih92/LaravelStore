<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="sass/app.css" rel="stylesheet">
        <script src="js/app.js"></script>
    </head>
    <body>
        <header>
            <div class="navigation">
                <img src="{{ asset('img/logo.jpg') }}" alt="tag">
            </div>
            <div class="header">
                <h1>Welcome! Find your perfect car at Milos Motor Sales.</h1>
            </div>
        </header>
        <main>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://s1.1zoom.me/b4664/379/Toyota_2019_RAV4_Hybrid_Worldwide_Hybrid_vehicle_559986_1920x1080.jpg" class="d-block w-100" alt="Toyota RAV4">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://vrelegume.rs/wp-content/uploads/2021/03/2020-honda-cr-v-touring.jpg" class="d-block w-100" alt="Honda CR-V">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://pure.wallpapergk.com/download/hyundai_tucson_hybrid_2021_4k_5k_cars-1920x1080.jpg" class="d-block w-100" alt="Hyundai Tucson">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </main>
        <footer>
            <div>
                <p>Telefon: <a href="tel:011/123-45-67">011/123-45-67</a></p>
                <p>E-mail: <a href="mailto:email@example.rs">email@example.rs</a></p>
                <p>©2022 Milos Motor Sales, Republic of Serbia, Inc. All information applies to Serbia vehicles only.</p>
            </div>
        </footer>
    </body>
</html>
