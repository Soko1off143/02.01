<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
    <style>
        .active {
            color: red;
        }
    </style>
</head>
<body>
    <ul>
        @foreach ($arr as $elem)
            @if ($elem == date("d"))
                <li class='active'>{{$elem}}</li>
            @else
                <li>{{$elem}}</li>
            @endif
        @endforeach
    </ul>
</body>
</html>