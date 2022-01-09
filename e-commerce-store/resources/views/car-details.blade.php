<x-layout>
    <div class="header">
        <h1>{{ $car->brand }} {{ $car->model }}</h1>
    </div>
    <div class="car-details">
        <div class="car-details-image-container">
            <img src="{{$car->imageUrl}}" alt="car picture" class="car-details-image" />
        </div>
        <div class="car-details-table">
            <div class="car-details-table-item">
                <span class="car-details-table-key">Brand: </span>
                <span class="car-details-table-value">{{ $car->brand }}</span>
            </div>
            <div class="car-details-table-item">
                <span class="car-details-table-key">Manufacture Year: </span>
                <span class="car-details-table-value">{{ date('Y', strtotime($car->manufactureYear)) }}</span>
            </div>
            <div class="car-details-table-item">
                <span class="car-details-table-key">Model: </span>
                <span class="car-details-table-value">{{ $car->model }}</span>
            </div>
            <div class="car-details-table-item">
                <span class="car-details-table-key">Cubic capacity (in cm3): </span>
                <span class="car-details-table-value">{{ number_format($car->cubicCapacity, 0, ',', '.') }}</span>
            </div>
            <div class="car-details-table-item">
                <span class="car-details-table-key">Body type: </span>
                <span class="car-details-table-value">{{ $car->bodyType }}</span>
            </div>
            <div class="car-details-table-item">
                <span class="car-details-table-key">Power: </span>
                <span class="car-details-table-value">{{ $car->power }} HP</span>
            </div>
            <div class="car-details-table-item">
                <span class="car-details-table-key">Fuel type: </span>
                <span class="car-details-table-value">{{ $car->fuelType }}</span>
            </div>
            <div class="car-details-table-item car-details-table-price">
                <span class="car-details-table-key">Price: </span>
                <span class="car-details-table-value">{{ number_format($car->price, 2, ',', '.') }} &euro;</span>
            </div>
        </div>
    </div>
</x-layout>
