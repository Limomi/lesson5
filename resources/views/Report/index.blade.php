<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>База</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <H1>
            Нарушений.нет
        </H1>
        <a href="">
            Главная
        </a>
        <a href="array">
            Массивы
        </a>
        <a href="report">
            База таблица
        </a>
    </header>
    @foreach($reports as $item)
        <div class="container">
            <div class="itemRow">
                <div class="itemId">
                    {{ $item['id'] }}
                </div>
                <div class="itemName">
                    {{ $item['name'] }}
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>