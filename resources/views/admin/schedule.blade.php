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
                    <td>
                        <a href="{{route('edit_schedule',$schedule->id)}}">Edit</a>
                    </td>
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
                    <input type="text" id="schedule_city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="schedule_time">Departure Time :</label>
                    <input type="text" id="schedule_time" name="jam_keberangkatan" required>
                </div>
                <button type="submit" class="button-insert">Insert</button>
            </form>
        </div>
    </div>
</body>
</html>
