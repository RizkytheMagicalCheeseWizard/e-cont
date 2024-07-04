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
        <form action="{{ route('update_type', $data_type->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" id="class" name="class" value="{{ $data_type->class }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{ $data_type->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <br>
        <form action="{{ route('delete_type', $data_type->id) }}" method="POST" onsubmit="return confirm('Delete this?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    

    </div>

    <x-footer></x-footer>
</body>
</html>