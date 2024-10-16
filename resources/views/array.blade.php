<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивчик</title>
</head>
<body>
    @foreach($array as $item)
        <div>
            <img src="{{$item['path']}}" alt="">
            <p>{{ $item['title'] }}</p>
            <p>{{ $item['price'] }}</p
        </div>
    @endforeach
</body>
</html>