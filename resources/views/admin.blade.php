@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Uczestnicy') }}: {{ $attendeesCount }}
                        / {{ $attendeesMaxCount }}</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Lp.</th>
                                <th>Imię i nazwisko</th>
                                <th>Email</th>
                                <th>Wiek</th>
                            </tr>
                            @foreach ($attendees as $attendee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $attendee->first_name }} {{ $attendee->last_name }}</td>
                                    <td>{{ $attendee->email }}</td>
                                    <td>{{ $attendee->age ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
