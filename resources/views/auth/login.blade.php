<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <meta name="csrf-token" content="P7R0QDEVcncJSTfbH10OrGoTl04q9AGW7ZwaMNeW"> -->

    <!-- Favicon icon -->
    <title>Login | CREO</title>
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
    <link media="all" type="text/css" rel="stylesheet" href="assets/bootstrap/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />



</head>

<body>
    <div class="main-wrapper">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(images/creo-login1.png) no-repeat center center;">
            <div class="auth-box on-sidebar" style="background-color: #0E3A8A; color: #FFF;">
                <div id="loginform">

                    <!-- Form -->


<div class="logo">
    <span class="db">
        <img src="images/logo_login.png">
    </span>
    <br>
    <h4 class="font-medium m-b-20">
        Historial Clinico
    </h4>
</div>

<br>

<div class="row">
    <div class="col-12 mt-1">

        <form method="POST" action="{{route('login')}}" accept-charset="UTF-8" role="form">
                {{csrf_field()}}
            <div class="input-group mb-1 {{$errors->has('email') ? 'has-error' : ''}}">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user fa-sm"></i></span>
                </div>

                <input class="form-control form-control-xs" autocomplete="off" onkeyup="#" placeholder="Usuario" id="username" name="email" value="{{ old('email') }}" type="text">
            </div>
            <div class=" form-group row ml-1"> {!! $errors->first('email','<strong class="help-block">:message</strong>')!!}</div>


            <div class="input-group {{$errors->has('password') ? 'has-error' : ''}}">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock fa-sm "></i></span>
                </div>
                <input type="password" name="password" class="form-control form-control-xs" placeholder="Contraseña">
            </div>
            <div class=" form-group row ml-1"> {!! $errors->first('password','<strong class="help-block">:message</strong>')!!}</div>


            <div class="form-group row mt-1">
                <div class="col-md-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Recordar mis credenciales</label>
                        <!--
                        <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                        -->
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-xs-12 p-b-20">
                    <button class="btn btn-block btn-rounded btn-outline-warning" type="submit">Iniciar sesión</button>
                </div>
            </div>

        </form>

    </div>
</div>



                </div>



            </div>
        </div>
    </div>


    <script src="assets/lib//js/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>




</body>

</html>