<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gd chung</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('layout.header')
    <div id="content">
        <h1>Chung</h1>
        @yield('Noidung')
    </div>
    @include('layout.footer')
</body>
</html>