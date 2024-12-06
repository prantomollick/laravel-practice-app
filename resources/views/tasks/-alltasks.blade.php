<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Blade file</title>
</head>
<body>
    <h1>This is blade file</h1>
    <h2>All tasks</h2>

    @if(!empty($name))
    <p>
        You name is: {{ $name }}

    </p>
    @endif

    @if(!empty($total))
    <p>
        Total number of Taks = {{ $total }}
    </p>
    @endif

    {{-- {{ $tasks[0]['name']}} --}}
    {{ count($tasks) }}
    {{-- deractives --}}

    @foreach($tasks as $task)
        <p>
            {{ $task['name'] }}
        </p>
    @endforeach

    <script>
        const tasks = @json($tasks);
        console.log(tasks);
        console.log(tasks.length);
        
    </script>
    {{-- @include('tasks.partials.footer') --}}
</body>
</html>