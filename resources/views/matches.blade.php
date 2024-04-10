<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
</head>
<body>
<h2>Расписание матчей:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Первая команда</td>
    <td>Вторая команда</td>
    </thead>
    @foreach($matches as $match)
    <tr>
        <td>{{$match->id}}</td>
        <td>{{$match->team ? $match->team->name : 'Нет команды'}}</td>
        <td>{{$match->opponent ? $match->opponent->name : 'Нет команды'}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
