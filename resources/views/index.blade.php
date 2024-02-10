<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
</head>
<body>
    <h1 class="text-center">CRUD APP</h1>
    <h1 class="text-center">
        <a href="/users/adduser" class="btn btn-primary">Add+ user</a>
    </h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $users as $user )
                <tr>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> number}}</td>
                    <td>
                        <a href="/users/update/{{$user->id}}" class="btn btn-primary">Update</a>
                        <a href="/users/delete/{{$user->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>