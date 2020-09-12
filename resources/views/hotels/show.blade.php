@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::user()->manager)
                <div class="mb-2 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('hotels.rooms.create', $hotel->id)}}"> Create new Room </a>
                </div>
            @endif

            <div class="card">
                <table class="table table-striped">
                    <tr>
                        <th><strong>Room Category</strong></th>
                        <th><strong>Reserved</strong></th>
                        <th></th>
                    </tr>

                    @foreach($rooms as $room)
                        <tr>
                            <td> {{ $room->category }} </td>
                            <td> {{ $room->reserved ? 'Yes' : 'No' }} </td>
                            <td>
                                @if($room->reserved)
                                    @if(Auth::user()->manager)
                                        {{ "Reserved by {$room->user->name}" }}
                                        <a href="{{route('hotels.rooms.edit', [$hotel->id, $room->id])}}">Cancel Reserve</a>
                                    @endif
                                @else
                                    <a href="{{route('hotels.rooms.edit', [$hotel->id, $room->id])}}">Reserve</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
