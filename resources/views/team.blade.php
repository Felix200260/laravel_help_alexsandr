<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
</head>
<body>
    <h2>{{$team ? "Матчи, в которых участвовала команда ".$team->name : "Неверный ID команды"}}</h2>
    @if($team)
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Команда 1</th>
                <th>Команда 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach($team->matches as $match)
                <tr>
                    <td>{{$match->id}}</td>
                    <td>{{$match->team1->name}}</td>
                    <td>{{$match->team2->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>
