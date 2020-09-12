<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\User;

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
        $hotel = Hotel::find($id);
        $rooms = $hotel->rooms;
        return view('hotels.show', compact('rooms', 'hotel'));
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);

        return view('hotels.edit',compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->update($request->all());
        $hotel->save();

        return redirect()->route('hotels.show', [$hotel]);
    }

    public function destroy($id)
    {

    }
}
