<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;
use Auth;

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

    public function edit($hotel_id, $id)
    {
        $room = Room::findOrFail($id);
        $room->reserved = !$room->reserved;
        $room->user()->associate(Auth::user());
        $room->save();

        return redirect()->route('hotels.show', $hotel_id);
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
