<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Di's Hotel - Admin</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/cssadmin.css')}}">
    <script src="asset/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('admin.navbar_admin')
    @yield('dashboard')
    @yield('rooms_admin')
    @yield('facilities_admin')
    @yield('detailrooms')
    @yield('adddetails')
    @yield('addrooms')
    @yield('addfacilities')

</body>
</html>