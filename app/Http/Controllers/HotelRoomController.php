<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

class HotelRoomController extends Controller
{

    public function index()
    {

    }

    public function create($hotel_id)
    {
        return view('rooms.create', compact('hotel_id'));
    }

    public function store($hotel_id, Request $request)
    {
        Room::create($request->all() + ['hotel_id' => $hotel_id]);

        return redirect()->route('hotels.show', $hotel_id);
    }

    public function show($id)
    {
        //
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
