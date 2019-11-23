<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Todos list</title>
</head>

<body>
    <h2 class="text-primary text-center">My todo list</h2>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">completed</th>
            </tr>
        </thead>
        <tbody>@foreach($todos as $todo)
            <tr>
                <td> {{ $todo->id }}</td>
                <td> <a href="/todos/{{ $todo->id }}"> {{ $todo->name }} </a></td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->completed }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>