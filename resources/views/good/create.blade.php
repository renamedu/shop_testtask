<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good create</title>
</head>
<body>
    <h1>Товар:</h1>
    <form action="{{route('good.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label>Название</label>
            <input type="text" name="title" placeholder="title">
            @error('title')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Описание</label>
            <input type="text" name="description" placeholder="description">
            @error('description')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Категория</label>
            <input type="text" name="category" placeholder="category">
            @error('category')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Цена</label>
            <input type="number" name="price" placeholder="price">
            @error('price')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Скидка</label>
            <input type="number" name="discount" placeholder="discount" min="0" max="99">
            @error('discount')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Свое производство</label>
            <input type="radio" id="1" name="svoe_proizvodstvo" value="1"/>
            <label for="1">Да</label>
            <input type="radio" id="0" name="svoe_proizvodstvo" value="0" checked />
            <label for="0">Нет</label>
            @error('svoe_proizvodstvo')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>Изображение</label>
            <input type="file" name="image" accept=".jpg, .jpeg, .png">
            @error('image')
                <div>{{$message}}</div>
            @enderror
        </div>
        <input type="submit" value="Add">
    </form>

</body>
</html>