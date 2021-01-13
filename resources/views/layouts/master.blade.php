<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/app.css">
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Cryst<b>foker</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @yield('Home')">
                        <a class="nav-link" href="/dashboard">Profile</a>
                    </li>
                    <li class="nav-item @yield('Category')">
                        <a class="nav-link" href="/dashboard">Settings</a>
                    </li>
                    {{-- <li class="nav-item @yield('Book')">
                        <a class="nav-link" href="/book">Book</a>
                    </li> --}}
                    {{-- <li class="nav-item @yield('Promo')">
                        <a class="nav-link" href="/promo">Promo</a>
                    </li>
                    <li class="nav-item @yield('Order')">
                        <a class="nav-link" href="/order">Order</a>
                    </li>
                    <li class="nav-item @yield('Income')">
                        <a class="nav-link" href="/income">Income</a>
                    </li> --}}
                    {{-- <li class="nav-item @yield('Log Out')">
                        <a class="nav-link" href="/logout">Log Out</a>
                    </li> --}}
                </ul>
            </div>
        </nav>

        <!-- CONTAINER -->
        <div class="container">
            @yield('content')
        </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>