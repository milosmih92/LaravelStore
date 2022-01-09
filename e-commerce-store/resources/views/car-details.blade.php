<x-layout>
    <div>
        <h2>{{ $car->brand }} {{ $car->model }}</h2>
        <div class="car-image-details">
            <img src="{{$car->imageUrl}}" alt="car picture" class="car-image" />
        </div>
    </div>
</x-layout>
