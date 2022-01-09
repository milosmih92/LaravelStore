<x-layout>
    <div class="header">
        <h1>Welcome! Find your perfect car at Milos Motor Sales.</h1>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://s1.1zoom.me/b5050/633/Toyota_RAV4_Hybrid_Black_Edition_2020_Black_590330_1920x1080.jpg" class="d-block w-100" alt="Toyota RAV4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Toyota RAV4 Hybrid</h5>
                    <p>Efficiency Is Everything. Toyota Safety Sense™ 2.0.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images3.alphacoders.com/971/971763.jpg" class="d-block w-100" alt="Honda CR-V">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Honda CR-V</h5>
                    <p>Your Favorite Ride. Real Time AWD.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://pure.wallpapergk.com/download/hyundai_tucson_hybrid_2021_4k_5k_cars-1920x1080.jpg" class="d-block w-100" alt="Hyundai Tucson">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hyundai Tucson</h5>
                    <p>Built for the modern adventure. The future’s wide open.</p>
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
    <div class="home-cards">
        <div class="card">
            <img src="{{ asset('img/car-research.png') }}" alt="car-research" />
            <h5>Car research</h5>
            <p>Research cars pricing and specifications</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/sell-your-car.png') }}" alt="sell-your-car" />
            <h5>No time to sell your car?</h5>
            <p>Sell your car quickly with an instant offer.</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/find-best-deal.png') }}" alt="find-best-deal" />
            <h5>Find the best deal</h5>
            <p>Check out all the latest car deals.</p>
        </div>
    </div>
</x-layout>
