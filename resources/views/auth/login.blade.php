<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Consultorio Dental">
    <meta name="author" content="Bruno Chavez">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>{{ config('app.name', 'Consultorio Dental') }} - @yield('title')</title>

    <!-- Custom CSS -->    
    {{ Html::style('/assets/css/bootstrap.min.css')}}
    {{ Html::style('/assets/css/bootstrap-responsive.min.css')}}
    {{ Html::style('/assets/css/matrix-login.css')}}
    {{ Html::style('/assets/libs/font-awesome/css/font-awesome.css')}}
    
    {{ Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div id="loginbox"> 
        <form id="loginform" method="POST" class="form-vertical" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="control-group normal_text"> <h3><img src="/img/logo.png" alt="Logo" /></h3></div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autofocus>
                        @if ($errors->has('email'))
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                        @if ($errors->has('password'))
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="/password/reset" class="flip-link btn btn-info" id="to-recover">Recuperar Contraseña</a></span>

                <span class="pull-right">
                    <button type="submit" class="btn btn-success">
                        {{ __('Ingresar') }}
                    </button>
                </span>
            </div>
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    {{ Html::script('/assets/js/jquery.min.js')}}
</body>
</html>