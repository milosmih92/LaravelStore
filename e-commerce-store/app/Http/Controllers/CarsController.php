<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
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

    public function sendContactEmail(Request $request)
    {
        $data = new Contact();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->content = $request->input('message');

        Mail::to('milosmihajlovic302@gmail.com')->send(new ContactMail($data));
    }
}
