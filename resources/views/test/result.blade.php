<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат</title>
</head>
<body>
    <ul>
        <li>{{$name}}</li>
        <li>{{$surname}}</li>
        @foreach ($data as $elem)
            <li>{{$elem}}</li>
        @endforeach
    </ul>
</body>
</html>