<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <x-sidebar></x-sidebar>
    <table>
        <tr>
            <td>Email</td>
            <td>Name</td>
            <td>Role</td>
        </tr>
        @foreach ($data_user as $user)
        <tr>

        
            <td>{{$user->email}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->role}}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>