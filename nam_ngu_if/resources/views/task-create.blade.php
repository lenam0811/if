<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create task</title>
</head>

<body>
    <h2>Create Forms</h2>

    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <label for="fname">Name:</label><br>
        <input type="text" id="fname" name="name" required><br>
        <label for="lname">Description</label><br>
        <input type="text" id="lname" name="description" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
