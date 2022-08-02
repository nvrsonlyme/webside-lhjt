<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LHJT | Login</title>
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    <div class="overlay"></div>
    <form action="{{ route('login') }}" method="post" class="box">
        @csrf
        <div class="header">
            <h4>Login Account</h4>
        </div>
        <div class="login-area">
            <input type="text" name="username" class="username" placeholder="Username" autofocus required>
            <input type="password" name="password" class="password" placeholder="Password" required>
            <input type="submit" value="login" class="login" id="login">
            <a href="#">Forget Password?</a>
        </div>
    </form>
</body>
<script src="dist/sweetalert2.all.min.js"></script>
</html>
