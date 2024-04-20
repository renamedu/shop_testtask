<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
</head>
<body>
    <h1>Товары:</h1>
    <table>
  <thead>
  <tr>
    <th>#</th>
    <th>Название</th>
    <th>Описание</th>
    <th>Категория</th>
    <th>Цена</th>
    <th>Скидка</th>
    <th>Свое производство</th>
    <th>Изображение</th>
    <th>Изменить</th>
  </tr>
</thead>
<tbody>
  @foreach($goods as $good)
    <tr>
        <td>{{ $good->id }}</td>
        <td>{{ $good->title }}</td>
        <td>{{ $good->description }}</td>
        <td>{{ $good->category }}</td>
        <td>{{ $good->price }}</td>
        <td>{{ $good->discount }}%</td>
        <td>{{ $good->svoe_proizvodstvo }}</td>
        <td><img src="{{ asset('storage/'.$good->image) }}" alt="image" width="600"></td>
        <td><a href="{{ route('good.edit', $good->id) }}">Изменить</a></td>
        <td>
          <form action="{{ route('good.delete', $good->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
          </form>
        </td>
      </tr>
  @endforeach
</tbody>
</table>

</body>
</html>