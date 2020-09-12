@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <table class="table table-striped">
                    <tr>
                        <th><strong>Hotel Name</strong></th>
                    </tr>

                    @foreach($hotels as $hotel)
                        <tr>
                            <td>
                                <a href={{ url("hotels/{$hotel->id}")}}> {{ $hotel->name }} </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
