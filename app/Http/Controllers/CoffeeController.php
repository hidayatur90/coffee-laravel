<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use Illuminate\Support\Facades\DB;

class CoffeeController extends Controller
{
    // Read All data
    public function get_all_coffees()
    {
        $coffees = Coffee::all();
        return view('home', ['coffees' => $coffees]);
    }

    // Create New Coffee
    public function store_coffee(Request $request)
    {
        $this->validate($request,[
    		'nameCoffee' => 'required|string',
    		'jumlahStok' => 'integer',
    		'jumlahStok' => 'integer']
        );

        Coffee::create([
            'name' => $request->nameCoffee,
            'unit_stock' => $request->stock,
            'unit_price' => $request->price
        ]);

        return redirect('/home');

    }   

    // Read spesifically data
    public function get_coffee_by_id($id)
    {
        $coffee = Coffee::find($id);
        return view('editCoffee', ['coffee' => $coffee]);
    }

    // Update data Coffee
    public function update_coffee(Request $request, $id)
    {
        $this->validate($request,[
    		'nameCoffee' => 'required|string',
    		'jumlahStok' => 'integer',
    		'jumlahStok' => 'integer']
        );

        Coffee::where('id', $id)
        ->update([
            'name' => $request->nameCoffee,
            'unit_stock' => $request->stock,
            'unit_price' => $request->price
        ]);

        return redirect('/home');
    }

    // Delete data Coffee
    public function delete_coffee($id)
    {
        Coffee::where('id', $id)->delete();
        return redirect('home');
    }
}
