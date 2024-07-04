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
        <h2>Ticket Type</h2>
        <table>
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_type as $type)
                    <tr>
                        <td>{{$type->class}}</td>
                        <td>Rp.{{number_format($type->price)}}</td>
                        <td class="btn-to-schedule">
                            <a class="to-schedule" href="{{route('edit_type',$type->id)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-insert">
        <div class="title-insert">
            <h3>Add New Ticket Type</h3>
        </div>
        <form action="{{route('insert_type')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="schedule_city">Class :</label>
                <input type="text" id="schedule_city" name="class" required>
            </div>
            <div class="form-group">
                <label for="schedule_time">Price :</label>
                <input type="text" id="schedule_time" name="price" required>
            </div>
            <button type="submit" class="button-insert">Insert</button>
        </form>
    </div>
    <x-footer></x-footer>
</body>
</html>