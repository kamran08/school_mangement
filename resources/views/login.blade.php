<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Mangement</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/common.css" />
    <link rel="stylesheet" href="/css/main.css" />
</head>

<body>
    <main class="_main">
        <div class="">
            <header>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarExample01">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/result">Result</a>
                                </li>
                                @if (!Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout">Logout</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navbar -->

                <!-- Jumbotron -->
                <div class="p-6 text-center bg-light">
                    <form action="/loginApi" method="post">
                        @csrf

                        <div class="form-outline l">
                            <label class="form-label" for="formControlDefault">ID/EMAIL</label>
                            <input type="email" name="email" id="formControlDefault" class="form-control @error('email') is-invalid @enderror" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-outline l">
                            <label class="form-label" for="formControlDefault">Password</label>
                            <input type="password" name="password" id="formControlDefault" class="form-control  @error('password') is-invalid @enderror" />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-outline l">
                            <button type="submit" class="btn btn-primary">Button</button>
                        </div>
                    </form>
                </div>
                <!-- Jumbotron -->
            </header>



        </div>
    </main>

    <footer class="bg-light text-center text-lg-start s">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-dark" href="/">Result Management</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
<style>
    .s {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }

    .p-6 {
        padding: 10rem !important;
    }

    .l {
        padding-bottom: 20px;
    }
</style>