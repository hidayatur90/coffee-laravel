<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use Illuminate\Support\Facades\DB;

class CoffeeController extends Controller
{
    public function get_all_coffees()
    {
        $coffees = DB::table('coffee')
            ->select('*')
            ->get();
        // return $coffees;
        return view('home', ['coffees' => $coffees]);
    }

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

    public function get_coffee_by_id()
    {

    }

    public function update_coffee()
    {

    }

    public function delete_coffee()
    {

    }
}
