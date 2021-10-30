<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project I</title>
</head>

<body>
    @include('dashboard.partials.nav-menu')
    <div class="container section">
        @include('dashboard.partials.status')
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
