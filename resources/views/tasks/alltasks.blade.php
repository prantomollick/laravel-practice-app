<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Blade file</title>

    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>All tasks</h1>
    @foreach($tasks as $task)
        <div>
            <h2>{{$task['id']}}- {{ $task['name'] }}</h2>
            <p>{{ $task['description'] }}</p>
        </div>
    @endforeach
</body>
</html>