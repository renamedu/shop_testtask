<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users create</title>
</head>
<body>
    <h1>Пользователи:</h1>
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="User name">
            @error('name')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email">
            @error('email')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <div>{{$message}}</div>
            @enderror
        </div>
        <input type="submit" value="Add">
    </form>

</body>
</html>