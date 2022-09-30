<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | OS</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-5.0.2/css/bootstrap.min.css">
    <script src="bootstrap-5.0.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link href="css/all.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('layouts.sidebar')
    <div style="margin-left: 250px !important;">
        @yield('content')
    </div>
</body>

</html>
