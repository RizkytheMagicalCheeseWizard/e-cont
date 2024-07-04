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
            <td>Action</td>
        </tr>
        @foreach ($data_schedule as $schedule)
        <tr>
            <td>{{$schedule->city}}</td>
            <td>{{$schedule->jam_keberangkatan}}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
    <div class="card-insert"></div>
        <div class="title-insert"></div>
        <form action="{{route('insert_schedule')}}" method="POST">
            @csrf
            <ul>
                <li>
                    <label for="">City :</label>
                    <input type="text" name="schedule_city" required>
                </li>
                <li>
                    <label for="">Departure Time :</label>
                    <input type="text" name="schedule_time" required>
                </li>
                <li>
                    <button type="submit" class="button-insert">Insert</button>
                </li>
            </ul>
        </form>
</body>
</html>