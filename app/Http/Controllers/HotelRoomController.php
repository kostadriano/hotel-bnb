<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Room;
use Auth;

class HotelRoomController extends Controller
{
    public function create($hotel_id)
    {
        return view('rooms.create', compact('hotel_id'));
    }

    public function store($hotel_id, Request $request)
    {
        Room::create($request->all() + ['hotel_id' => $hotel_id]);

        return redirect()->route('hotels.show', $hotel_id);
    }

    public function edit($hotel_id, $id)
    {
        $room = Room::find($id);
        return view('rooms.edit', compact('room', 'hotel_id'));
    }

    public function reserve($hotel_id, $id)
    {
        $room = Room::findOrFail($id);
        $room->reserved = !$room->reserved;
        $room->user()->associate(Auth::user());
        $room->save();

        if($room->reserved) {
            Log::info("Room {$room->id} has been reserved for ".Auth::User()->name);
        } else {
            Log::info("Room {$room->id} reserve has been canceled");
        }

        return redirect()->route('hotels.show', $hotel_id)->with('status', 'Reserve updated!');
    }

    public function update($hotel_id, Request $request, $id)
    {
        $room = Room::find($id);
        $room->update($request->all());

        return redirect()->route('hotels.show', $hotel_id)->with('status', 'Room updated!');
    }

    public function destroy($hotel_id, $id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect()->route('hotels.show', $hotel_id)->with('status', 'Room deleted!');
    }
}
