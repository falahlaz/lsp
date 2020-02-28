<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('_assets/css/login.css')}}">
</head>
<body>


    <div class="container-login">

        <div class="row jus-between align-center" style="margin-bottom: 35px;">
            <div class="one">
                <h1>Selamat Datang di LSP <br> SMKN 26 Jakarta</h1>
                <p>Silahkan login untuk dapat <br> melanjutkan</p>
            </div>
            <div class="two">
                <img src="img/logo.png" alt="Logo" class="logo">
            </div>
        </div>

        <div class="row">
            <div class="one" style="width: 100%; text-align: center;">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" required>
                        <label for="username" class="form-label">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" required>
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <button class="btn">LOGIN</button>
                </form>
                <hr>
                <p>Tidak memiliki akun? <a href="#">Daftar</a></p>
            </div>
        </div>


    </div>
    
    
</body>
</html>