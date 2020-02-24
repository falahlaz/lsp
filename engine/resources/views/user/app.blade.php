<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    
    <title>@yield('title')</title>

    <link href="{{URL::asset('public_html/__user_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <link href="{{URL::asset('public_html/__user_assets/multistepform/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('public_html/__user_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/chosen/chosen.min.css')}}">
    <style>
        .loader {
            border: 10px solid #f3f3f3; /* Light grey */
            border-top: 10px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 2s linear infinite;
            position: fixed;
           margin: 0 auto;
            left: 50%;
            top: 45%;
        }   

            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>


    @yield('content')





<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{URL::asset('public_html/__user_assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('public_html/__user_assets/multistepform/js/msform.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>
@yield('script')

<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
</html>