<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Di's Hotel - Recepcionist</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/cssadmin.css')}}">
    <script src="asset/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('receptionist.navbar_recep')
    @yield('dashboard')
    @yield('order_recep')
    @yield('order_ongoing')
    @yield('order_history')
   

</body>
</html>