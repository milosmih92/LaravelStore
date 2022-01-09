<x-layout>
    <div class="car-list">
        @foreach($cars as $car)
            <a href="/car/{{$car->id}}" class="car-card">
                <div class="car-image-container">
                    <img src="{{$car->imageUrl}}" alt="car picture" class="car-image" />
                </div>
                <div class="car-content">
                    <h5 class="car-name">{{ $car->brand }} {{ $car->model }}</h5>
                    <p class="car-price">{{ number_format($car->price, 2, ',', '.')  }} &euro;</p>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
