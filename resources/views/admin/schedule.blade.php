<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
    <link rel="stylesheet" href="{{asset('css/schedule.css')}}">
</head>
<body>
    <x-sidebar></x-sidebar>
<<<<<<< HEAD
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
            <td><a href=""> </a> <a href=""></a></td>
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
                    <input type="text" name="city" required>
                </li>
                <li>
                    <label for="">Departure Time :</label>
                    <input type="text" name="jam_keberangkatan" required>
                </li>
                <li>
                    <button type="submit" class="button-insert">Insert</button>
                </li>
            </ul>
        </form>
=======
    <div class="container">
        <h2>Insert Schedule</h2>
        <table>
            <thead>
                <tr>
                    <th>City</th>
                    <th>Departure Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_schedule as $schedule)
                <tr>
                    <td>{{$schedule->city}}</td>
                    <td>{{$schedule->jam_keberangkatan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-insert">
            <div class="title-insert">
                <h3>Add New Schedule</h3>
            </div>
            <form action="{{route('insert_schedule')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="schedule_city">City :</label>
                    <input type="text" id="schedule_city" name="schedule_city" required>
                </div>
                <div class="form-group">
                    <label for="schedule_time">Departure Time :</label>
                    <input type="text" id="schedule_time" name="schedule_time" required>
                </div>
                <button type="submit" class="button-insert">Insert</button>
            </form>
        </div>
    </div>
>>>>>>> refs/remotes/origin/main
</body>
</html>
