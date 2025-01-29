<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @yield('styles')
</head>

<body>
    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')

    @yield('scripts')
</body>

</html>
