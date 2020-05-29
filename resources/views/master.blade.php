<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/stylenavbar.css')}}">


    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>

    <style>
        body,
        html {
            scroll-behavior: smooth;
        }
    </style>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#244282;">
        <a class="navbar-brand" href="/lecturer/{{$account[0]->code}}">
            <img src="{{ asset('/images/logo JTI.png') }}" height=100px alt="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/lecturer/{{$account[0]->code}}/subject"> Subjects List </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/lecturer/{{$account[0]->code}}/research"> Research Group </a>
                </li>
            </ul>
        </div>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>

    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Dashboard</a>
            <a class="breadcrumb-item" href="#">@yield('title')</a>
            <span class="breadcrumb-item active"></span>
        </nav>

        
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <div class="container card-text">
                    <div class="container">
                        <div class="row my-2">
                            <!-- Profile Picture -->
                            @yield('content')
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


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