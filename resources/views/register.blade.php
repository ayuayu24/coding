<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTER - BAWASLU SLEMAN</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
    <link href="{{ asset('style/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <!-- <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a> -->
                </div>
                <form class="login-form" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <form>
                        <h3 class="text-center">REGISTER</h3>

                         <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Nama">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control form-control-user @error('jabatan') is-invalid @enderror" placeholder="Jabatan">
                            @error('jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

                        <!-- <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgllahir" class="form-control form-control-user @error('tgllahir') is-invalid @enderror" placeholder="Tanggal Lahir">
                            @error('tgllahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

                       <!--  <div class="form-group">
                            <label>No Handphone</label>
                            <input type="text" name="nohp" class="form-control form-control-user @error('nohp') is-invalid @enderror" placeholder="No Handphone">
                            @error('nohp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

                        <!-- <div class="form-group">
                            <label>No WhatsApp</label>
                            <input type="text" name="nowa" class="form-control form-control-user @error('nowa') is-invalid @enderror" placeholder="No WhatsApp">
                            @error('nowa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

                       <!--  <div class="form-group">
                            <label>Alamat Kantor</label>
                            <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" placeholder="Alamat Kantor">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Password Confirmation">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{route('login')}}"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>


</body>
</html>
