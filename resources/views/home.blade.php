@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-striped mb-0">
                    <tr>
                        <th><strong>Hotel Name</strong></th>

                        @if(Auth::user()->manager)
                            <th></th>
                        @endif
                    </tr>

                    @foreach($hotels as $hotel)
                        <tr>
                            <td class="d-flex align-items-center">
                                <a href={{ url("hotels/{$hotel->id}")}}> {{ $hotel->name }} </a>
                            </td>

                            @if(Auth::user()->manager)
                                <td class="text-right">
                                    <a class="btn btn-primary mr-2" href="{{ route('hotels.edit', $hotel)}}"> Edit Hotel </a>

                                    <a class="btn btn-danger" href="{{ url('hotels/'.$hotel->id.'/delete')}}"> Delete Hotel </a>
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
