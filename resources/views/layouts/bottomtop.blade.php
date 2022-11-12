<!DOCTYPE html>
<html>
<head>
    @yield('title')
    <link rel='stylesheet' href='zadanie8/style.css'/>
</head>
<body>
    <div class='block'>
        @include('layouts.elems.header')
        <div class='mainContent'>
            <div class='sidebar'>
                Основная часть
                @yield('aside')
            </div>
            <div class='content'>
                @yield('main')
            </div>
        </div>
        @include('layouts.elems.footer')
    </div>
</body>
</html>