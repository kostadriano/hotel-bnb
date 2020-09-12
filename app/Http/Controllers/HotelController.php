<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $hotel = Hotel::create($request->all());

        return redirect()->route('hotels.show', [$hotel]);
    }

    public function show($id)
    {
        $rooms = Hotel::find($id)->rooms;

        return view('hotels.show', compact('rooms'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
