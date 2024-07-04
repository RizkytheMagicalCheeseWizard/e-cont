<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <x-sidebar></x-sidebar>
    <div class="container">
        <div class="card">
            <div class="card-booking">
                <h2>Booked</h2>
                @php
                    $totalQ = 0;
                @endphp

                @foreach ($data_booking as $book)
                    @php
                        $totalQ += $book->quantity;
                    @endphp
                    <div class="result">{{$totalQ}}</div>
                @endforeach
            </div>
            <div class="card-totalprice">
                <h2>Total Price</h2>
                @php
                    $totalP = 0;
                @endphp
                @foreach ($data_booking as $book)
                    @php
                        $totalP += $book->total_price;
                    @endphp
                    <div class="result">Rp.{{number_format($totalP)}}</div>
                @endforeach
            </div>
        </div>
        <br> 
        <div class="user-booking">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Total Price</th>
                        <th>Quantity</th>
                        <th>Class</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($data_booking as $booking)
                        <td>{{$booking->user->name}}</td>
                        <td>{{number_format($booking->total_price)}}</td>
                        <td>{{$booking->quantity}}</td>
                        <td>{{$booking->typeticket->class}}</td>
                        <td>{{$booking->schedule->city}}</td>
                    @endforeach
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>