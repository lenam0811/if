<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($tasks as $task)
        <div>
            <a href="">
                <h1>{{ $task->name }}</h1>
            </a>
            <p>{{ $task->description }}</p>

        </div>
        <br>
    @endforeach
</body>

</html>
