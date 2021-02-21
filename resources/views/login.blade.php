<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Result Management</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="/css/fontawesome-all.min.css" media="all" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" media="all" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />
</head>

<body>
    <!-- Header Section Start -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="logo">
                        Result Management
                        <!-- <a href=""><img src="/img/logo-light.png" alt="logo" /></a> -->
                    </div>
                </div>
                <div class="col-xl-9 text-right">
                    <nav class="mainmenu">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><a href="/result">Result</a></li>
                            <li><a href="/about">About</a></li>
                            @if (!Auth::check())
                            <li><a href="/login">Login</a></li>
                            @else
                            <li><a class="nav-link" href="/logout">Logout</a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Slider Section Start -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 dis-flex justify-content-center align-items-center">
                    <form action="/loginApi" method="post">
                        @csrf
                        <div class="form-group">
                            <label style="color: white !important;" for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label style="color: white !important;" for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </form>

                    <!-- <div class="col-xl-12 text-center">
                        <div class="slider_content">
                            <h1>Enter your credential</h1>
                            <form action="/loginApi" method="post">
                                @csrf

                                <input type="email" name="email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input type="password" name="password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                                <button type="submit" class="btn btn-primary">Button</button>

                            </form>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
    <!-- Slider Section End -->



    <!-- Contact Section Start -->

    <!-- Contact Section End -->

    <!-- Price Section Start -->

    <!-- Price Section End -->
    <!-- Footer Section Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mx-auto text-center">
                    <div class="footer_content">
                        <h1>Get In Touch</h1>
                        <ul>
                            <li>Result Management</li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                        <p>&copy; Result Mangement 2021, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/holder.min.js"></script>
</body>

</html>