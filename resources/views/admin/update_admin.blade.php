<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('css/edit_schedule.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <x-sidebar></x-sidebar>
    <div class="container">
        <h2>Edit Schedule</h2>
        <form action="{{route('update_schedule',$data_schedule->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="city" value="{{$data_schedule->city}}" required>
            </div>
            <div class="form-group">
                <input type="text" name="jam_keberangkatan" value="{{$data_schedule->jam_keberangkatan}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <br>
        <form action="{{ route('delete_schedule', $data_schedule->id) }}" method="POST" onsubmit="return confirm('Delete this?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
            
        </div>

    </div>

    <x-footer></x-footer>
</body>
</html>