<?php

namespace App\Http\Controllers;


use App\Client;
use App\Car;

use Facade\FlareClient\Middleware\CensorRequestBodyFields;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class ParkingController extends Controller
{
    public function index()
    {
        $client = Client::paginate(20);
        $cars = Car::all();

        return view('client.index', compact('client', 'cars'));
    }

    public function create()
    {
        $cars = Car::all();
        return view('client.create', compact('cars'));
    }


    public function store()
    {
        $data_client = request()->validate([
            'id' => '',
            'phone' => 'required|unique:clients|digits:11',
            'full_name' => 'required|filled|string|min:3',
            'sex' => 'string',
            'address' => 'required',

        ]);

        $client = Client::create($data_client);
        $client_new_id = $client->id;

        $data_car = request()->validate([
                'brand' => 'required|filled | string',
                'model' => 'required|filled | string',
                'color' => 'required|filled|string',
                'registration_number' => 'required|filled|unique:cars',
            ]) + ['client_id' => $client_new_id];


        Car::create($data_car);
        return redirect()->route('client.index');
    }


    public function show(Client $client, Car $car)
    {
        $cars = Car::all();
        $arr_relative = $client->cars;
        return view('client.show', compact('client', 'car', 'arr_relative', 'cars'));
    }

    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }


    public function update(Client $client)
    {
        $data = request()->validate([
            'phone' => 'required|unique:clients|digits:11',
            'full_name' => 'required|filled|string|min:3',
            'sex' => 'string',
            'address' => 'string',
        ]);
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }


    public function destroy(Client $client, Car $car)
    {
        $client->delete();
        return redirect()->route('client.index');
    }


    public function addition(Client $client)
    {

        $data_new_car = request()->validate([
            'brand' => 'required|filled | string',
            'model' => 'required|filled | string',
            'color' => 'required|filled|string',
            'registration_number' => 'required|filled|unique:cars',
            'client_id' => '',

        ]);

        Car::create($data_new_car);
        return redirect()->route('client.index');

    }


}
