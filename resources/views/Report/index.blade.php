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
    @foreach($reports as $report)
        <div class="container">
            <div class="itemRow">
                <div class="itemId">
                    {{ $report['id'] }}
                </div>
                <a class="itemName" href="/report/{{$report['id']}}">
                    {{ $report['name'] }}
                </a>
                <div class="deleteItem">
                    <form method="POST" action="{{route('reports.destroy', $report -> id)}}">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    
    <form  method="POST" action="{{route('reports.store')}}">
        @csrf
        <input name ="name" type="text" class="formInput"><br>
        <input type="textaria" class="formInput"><br>
        <input type="submit" value="Создать">
    </form>
</body>
</html>