@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif 
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
                        @if(Auth::user()->manager)
                            <th>Operations</th>
                        @endif
                    </tr>

                    @foreach($rooms as $room)
                        <tr>
                            <td> {{ $room->category }} </td>
                            <td> {{ $room->reserved ? 'Yes' : 'No' }} </td>
                            <td>
                                @if($room->reserved)
                                    @if(Auth::user()->manager)
                                        {{ "Reserved by {$room->user->name}" }}
                                        <a href="{{url('hotels/'.$hotel->id.'/rooms/'.$room->id.'/reserve')}}">Cancel</a>
                                    @endif
                                @else
                                    <a href="{{url('hotels/'.$hotel->id.'/rooms/'.$room->id.'/reserve')}}"> Reserve</a>
                                @endif
                            </td>

                            @if(Auth::user()->manager)
                            <td>
                                <a class="btn btn-primary" href="{{route('hotels.rooms.edit', [$hotel->id, $room->id])}}">
                                    Edit Room
                                </a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
