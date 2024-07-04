<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('css/user_table.css')}}">
</head>
<body>
    <x-sidebar></x-sidebar>
    <div class="container">
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_user as $user)
                <tr>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-footer></x-footer>
</body>
</html>
