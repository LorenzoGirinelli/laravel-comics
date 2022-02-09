<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

    @include('partial.header')

    <main>
        @yield('main_content')
    </main>

    @include('partial.footer')

</body>
</html>