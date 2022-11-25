<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index () {
        $cars = Car::all();
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    public function show () {
        $cars = Car::all();
        return view('cars.show', [
            'cars' => $cars
        ]);
    }

    public function create () {
        return view('cars.create');
    }

    public function store () {
        $car = new Car();
        $car->speed = request('speed');
        $car->acceleration = request('acceleration');
        $car->durability = request('durability');
        $car->fuel = request('fuel');
        $car->price = request('price');

        $car->save();

        return redirect('/cars/create')->with('mssg', 'Car Added');
    }
}
