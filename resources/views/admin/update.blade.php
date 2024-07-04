<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('css/edit_schedule.css')}}">
</head>
<body>
    <x-sidebar></x-sidebar>
    <div class="container">
        <h2>Edit Ticket Type</h2>
        <form action="{{route('update_type',$data_type->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Class</label>
                <input type="text" name="class" value="{{$data_type->class}}" required>
            </div>
            <div class="form-group">
                <input type="text" name="price" value="{{number_format($data_type->price)}}" required>
            </div>
        </form>
        <br>
        <div class="gyat">
            <button type="submit" class="btn btn-primary">Edit</button>
            @method('DELETE')
            <button type="submit" class="btn btn-primary" onclick="return confirm('Delete this?')">Delete</button>
        </div>

    </div>

    <x-footer></x-footer>
</body>
</html>