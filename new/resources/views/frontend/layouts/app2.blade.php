<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supawin</title>
    <!--==================== CSS LINK ================================-->
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{url('/public/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('/public/assets/css/owl.theme.default.css')}}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{url('/public/assets/css/style.css')}}">
    <!-- media css -->
    <link rel="stylesheet" href="{{url('/public/assets/css/responsive.css')}} ">
    <link href="images/index.ico" rel="SHORTCUT ICON" />
    <link href="../App_Themes/SupabetsGhana/layout.css" type="text/css" rel="stylesheet" />
</head>

<body style="">

    <div class="container page-container">


        <!-- header -->
        <header>
            <!-- top bar -->
            <div class="top-bar">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- logo -->
                        <div class="logo d-none d-lg-block">
                            <a href="index.html">
                                <img src="{{url('/public/assets/images/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <!-- end logo -->
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <!-- register -->
                        <div class="regigter">
                            <form action="#">
                                <input type="text" placeholder="username" required>
                                <input type="password" placeholder="Password" required>
                                <button type="submit">login</button>
                                <button type="button">forgot password</button>
                                <div>
                                    <button class="r-btn">register now</button>
                                </div>
                            </form>
                        </div>
                        <!-- end register -->
                    </div>
                </div>
            </div>
            <!-- end top bar -->
            <!-- main nav -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar-example2">
                    <a class="navbar-brand d-lg-none d-block" href="#">
                        <img src="{{url('/public/assets/images/logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> MY BETS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">RESULTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">DEPOSIT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">WITHDRAWAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">RULES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">MY ACCOUNT </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">HELP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end main nav -->
        </header>
        <!-- end header -->



         
               
                @yield('content')
            



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- owl carousel -->
    <script src="{{url('/public/assets/js/owl.carousel.js')}}"></script>
    <!-- custom js -->
    <script src="{{url('/public/assets/js/custom.js')}}"></script>
</body>

</html>        