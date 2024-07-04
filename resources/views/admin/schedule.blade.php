<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
</head>
<body>
    <x-sidebar></x-sidebar>
    <table>
        <tr>
            <td>City</td>
            <td>Departure Time</td>
        </tr>
        @foreach ($data_schedule as $schedule)
        <tr>
            <td>{{$schedule->city}}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>