@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('OTP Numbers') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Number</th>
                                <th scope="col">OTP From</th>
                                <th scope="col">OTP Number</th>
                                <th scope="col">Datetime</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach(App\Models\OtpNumber::all() as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->otp_from }}</td>
                                <td>{{ $item->otp_number }}</td>
                                <td>{{ $item->datetime }}</td>
                            </tr>
                            @endforeach

                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
