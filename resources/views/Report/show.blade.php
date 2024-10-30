<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form  method="POST" action="{{route('reports.update', $report->id)}}">
        @csrf
        @method('put')
        <input name ="name" type="text" class="formInput"><br>
        <input type="textaria" class="formInput"><br>
        <input type="submit" value="Обновить">
    </form>
</body>
</html>