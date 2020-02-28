<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('public_html/__assets/css/login.css')}}">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>


    <div class="container-login">

        <div class="row jus-between align-center" style="margin-bottom: 35px;">
            <div class="one">
                <h1>Selamat Datang di LSP <br> SMKN 26 Jakarta</h1>
                <p>Silahkan login untuk dapat <br> melanjutkan</p>
            </div>
            <div class="two">
                <img src="{{asset('public_html/__images/logo-login.png')}}" alt="Logo" class="logo">
            </div>
        </div>

        <div class="row">
            <div class="one" style="width: 100%; text-align: center;">
                <form method="post" action="{{route('user.login.post')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" required autocomplete="off">
                        <label for="password" class="form-label">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" required autocomplete="off">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <button class="btn">LOGIN</button>
                </form>
                <!-- <hr>     -->
                <!-- <p>Tidak memiliki akun? <a href="#">Daftar</a></p> -->
            </div>
        </div>


    </div>
    
    
</body>
</html>