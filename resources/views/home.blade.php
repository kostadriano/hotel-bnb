@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-striped">
                    <tr>
                        <th><strong>Hotel Name</strong></th>

                        @if(Auth::user()->manager)
                            <th></th>
                        @endif
                    </tr>

                    @foreach($hotels as $hotel)
                        <tr>
                            <td>
                                <a href={{ url("hotels/{$hotel->id}")}}> {{ $hotel->name }} </a>
                            </td>

                            @if(Auth::user()->manager)
                                <td>
                                    <a class="btn btn-primary" href="{{ route('hotels.edit', $hotel)}}"> Edit Hotel </a>
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
