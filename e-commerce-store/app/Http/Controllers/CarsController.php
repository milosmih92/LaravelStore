<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Car;

class CarsController extends BaseController
{
    public function getCarListView($page = 1) {
        $cars = Car::paginate(9);

        return view('car-list', ['cars' => $cars]);
    }

    public function getCarView($id) {
        $car = Car::find($id);

        return view('car-details', ['car' => $car]);
    }
}
