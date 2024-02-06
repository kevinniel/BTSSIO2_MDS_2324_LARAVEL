<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOTO</title>
</head>
<body>
    <h1>TOTO</h1>
    {{ $models }}
    <hr>
    {{ $tata }}
    <table border="1">
        <tbody>
            @foreach($models as $model)
                <tr>
                    <td>{{ $model->id }}</td>
                    <td>{{ $model->name }}</td>
                    <td>{{ $model->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>