<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">

                        <!-- form card Register -->
                        <div class="card rounded shadow shadow-sm">
                            <div class="card-header">
                                <h3 class="mb-0">Register</h3>
                            </div>
                            <div class="card-body">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                    <div class="md-form">
                                        <input type="text" id="inputMDEx" class="form-control" name="nm" required>
                                        <label for="inputMDEx">Codename</label>
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" id="inputMDEx" class="form-control" type="email" name="email"
                                            required>
                                        <label for="inputMDEx">Email</label>
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>

                                    <div class="md-form">
                                        <input type="text" id="inputMDEx" class="form-control" name="uname1" required>
                                        <label for="inputMDEx">Username</label>
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>

                                    <div class="md-form">
                                        <input type="password" id="inputMDEx" class="form-control" type="password"
                                            name="pwd1" required>
                                        <label for="inputMDEx">Password</label>
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>

                                    <div class="md-form">
                                        <input type="password" id="inputMDEx" class="form-control" name="uname1"
                                            required>
                                        <label for="inputMDEx">Re-enter Password</label>
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>

                                    <span class="custom-control-description small text-dark">Have an account ?</span>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                                    <button type="submit" name="submit" class="btn btn-success btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </form>
                            </div>

                            <!--/card-block-->
                        </div>
                        <div class="alert alert-info" role="alert">
                            <?php 
                            if (isset($pesan)) {
								# code...
                                echo $pesan;
                            }else{
								echo "Input your username and password";
                            }
							?>
                        </div>
                        <!-- /form card Register -->
                    </div>
                </div>

                <!--/row-->
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

</body>

</html>