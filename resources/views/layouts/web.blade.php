<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="{{ asset('web/images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('web/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/20dd01c86d.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('web.includes.header')
    <!--============================== Main Start ==============================-->
        <main id="main">
        @yield('content')
        </main>
    <!--============================== Main End ==============================-->
    @include('web.includes.footer')

 <!--============================== Footer End ==============================-->
    <script src="{{ asset('web/js/jquery.min.js')}}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('web/js/main.js')}}"></script>
    <script src="{{ asset('web/js/custom.js')}}"></script>
    @stack('after-scripts')
</body>


</html>