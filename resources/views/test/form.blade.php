<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <form method="get" action="">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Имя"><br><br>
        <input type="text" name="surname" placeholder="Фамилия"><br><br>
        <input type="submit">
    </form>
</body>
</html>