<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container">
        <h2>Edit Booking</h2>
        <form action="{{ route('update', $data_booking->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="jadwal_id">Schedule:</label>
                <select class="form-control" id="jadwal_id" name="jadwal_id" required>
                    @foreach ($data_schedule as $schedule)
                        <option value="{{ $schedule->id }}" {{ $data_booking->jadwal_id == $schedule->id ? 'selected' : '' }}>
                            {{ $schedule->city }} - {{ $schedule->jam_keberangkatan }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type_ticket_id">Type Ticket:</label>
                <select class="form-control" id="type_ticket_id" name="type_ticket_id" required>
                    @foreach ($data_type as $type)
                        <option value="{{ $type->id }}" {{ $data_booking->type_ticket_id == $type->id ? 'selected' : '' }}>
                            {{ $type->class }} - Rp.{{ number_format($type->price, 2, '.', ',') }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="booking_date">Booking Date:</label>
                <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ $data_booking->booking_date }}" min="{{ $data_booking->booking_date }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $data_booking->quantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</body>
</html>