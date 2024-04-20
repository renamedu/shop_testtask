<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Пользователи:</h1>
    <table>
  <thead>
  <tr>
    <th>#</th>
    <th>Имя</th>
    <th>Емаил</th>
    <th>Подтверждение емаил</th>
  </tr>
</thead>
<tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email_verified_at }}</td>
        </tr>
    @endforeach
</tbody>
</table>

</body>
</html>