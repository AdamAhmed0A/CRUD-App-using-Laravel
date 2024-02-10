<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <title>Add user</title>
</head>
<body>
    <form class="from container mt-3" action="/users/update/{{$users->id}}" method="POST">
        @csrf
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$users->name}}" id="">
        <label for="" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="{{$users->email}}" id="">
        <label for="" class="form-label">Number</label>
        <input type="text" class="form-control" name="number" value="{{$users->number}}" id="">

        <input type="Submit" class="btn btn-primary" value="Send" name="" id="">
        @method("PUT")
    </form>
</body>
</html>