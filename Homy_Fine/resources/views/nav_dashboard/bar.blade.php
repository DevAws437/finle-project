<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>Document</title>
</head>
<body>
    <div class="navigation fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a> <!-- Logo -->


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="page-scroll" href="{{url('Home_section')}}">Home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="">product</a></li>
                                <li class="nav-item"><a class="page-scroll" href="{{url('.grid_card')}}">sections</section></a></li>
                                <li class="nav-item"><a class="page-scroll" href="#work">Portfolio</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#blog">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                <li class="">
                                    <div class="icons">
                                        {{-- <a href="search.html"><i class="fas fa-search"></i></a> --}}
                                        <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
                                        <div id="user-btn" class="fas fa-user"></div>
                                        {{-- <div id="menu-btn" class="fas fa-bars"></div> --}}
                                     </div>

                                     <div class="profile">
                                        <p class="name">Aws Or</p>
                                        <div class="flex">
                                           <a href="profile.html" class="btn">profile</a>
                                           <a href="#" class="delete-btn">logout</a>
                                        </div>
                                        <p class="account"><a href="login.html">login</a> or <a href="register.html">register</a></p>
                                     </div>

                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->
</body>
</html>
