<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Login</title>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Favicon icon -->

      <link rel="icon" href="{{asset('admin/images/favicon.ico')}}" type="image/x-icon">
      
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{asset('admin/pages/waves/css/waves.min.css')}}" type="text/css" media="all"><!-- feather icon --> 
      <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/feather/css/feather.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/icofont/css/icofont.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('admin/css/pages.css')}}">
  </head>

  <body>
  <!-- Pre-loader start -->
  
  <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material loginForm" action="{{route('admin.auth')}}" method="post">
                        <div class="auth-box card">
                            <div class="card-block">
                                <p class="text-muted text-center p-b-5 login__heading">Sign in with your account</p>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="form-label float-label">Username</label>
                                    <div class="emailErr err"></div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="form-label float-label">Password</label>
                                    <div class="passwordErr err"></div>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember">Remember me</label>
                                </div>
                                <div class="errorErr err"></div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-md waves-effect text-center m-b-20">LOGIN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section> 
    <div id="overlay" style=" display: none; position: fixed;  top: 0; left: 0;  width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.8); z-index: 9999; text-align: center;  padding-top: 20%;">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <p style="margin-top: 10px; font-size: 18px;">Please wait...</p>
</div>  
<script type="text/javascript" src="{{asset('admin/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<!-- waves js -->
<script src="{{asset('admin/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/common-pages.js')}}"></script>
<script src="{{asset('admin/js/sweetalert.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
       $(".loginForm").submit(function(event) {
           $('.err').text('');
           $('.form-control').css('border-color','green');
           event.preventDefault();
           formdata = new FormData($(this)[0]);
           $.ajax({
               url: $(this).attr('action'),
               contentType: false,
               processData: false,
               cache:false,
               data: formdata,
               type: $(this).attr('method'),
               beforeSend: function() {
                   $("#overlay").fadeIn(300);
               },complete: function() {
                   $("#overlay").fadeOut(300);
                   
               },
               success: function(response){
               if(response.status){
                   $('.loginForm')[0].reset();
                   Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                    });
                   if(typeof(response.url) != "undefined"){
                       setTimeout(function() {
                           window.location.replace(response.url);
                       }, 1000);
                   }
                   
               }else{
                   if(response.message!=undefined){
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: response.message
                    });
                   }else{
                        $.each(response.errors, function(key,val) {
                            var fieldElement = $('.' + key.replace(/\./g, '_')+'Err');
                            fieldElement.css('color','red').text(val[0]);
                            $('input[name="'+key+'"], select[name="' + key + '"], select[name="mothers[]"]').css('border-color','red');
                        });
                    }
               }
               },
   
           });
       });
   
   });
</script>


<!-- <script>
    beforeSend: function() {
   $("#overlay").fadeIn(1000);
},
complete: function() {
   $("#overlay").fadeOut(1000);
},

</script>     -->
</body>

</html>