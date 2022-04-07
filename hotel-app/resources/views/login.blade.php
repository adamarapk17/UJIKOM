<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dis Hotel</title>

    <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/csslogin.css')}}">
</head>
<body>


<img class='gambar-login' src="{{asset('image/bghotel.jpg')}}" alt="eror mas">
    <form class="login-box">
        <p>Username</p>
        <input type="text" name="username" placeholder="Masukan Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Masukan Password">
        <p></p>
        <a class="btn btn-login rounded-20" href="/admin" role="button">Login</a>
     </form>
</body>
</html>