@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <table class="table table-striped">
                    <tr>
                        <th><strong>Room Category</strong></th>
                        <th><strong>Reserved</strong></th>
                    </tr>

                    @foreach($rooms as $room)
                        <tr>
                            <td> {{ $room->category }} </td>
                            <td> {{ $room->reserved ? 'Yes' : 'No' }} </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
