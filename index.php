<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ Web bán hàng</title>

    <link rel="stylesheet" href="/CP1896M04/assets/vendor/bootstrap/css/bootstrap.min.css">

    <style>
    div {
        border: 1px solid red;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/CP1896M04/frontend/pages/gioithieu.php">Giới thiệu</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fuild">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/CP1896M04/assets/frontend/img/slider-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/CP1896M04/assets/frontend/img/slider-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/CP1896M04/assets/frontend/img/slider-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div><!-- /row -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src=""/>
            </div>
            <div class="col-md-9">
                <h1>Công ty TNHH...</h1>
            </div>
        </div><!-- /row -->

        <div class="row">
            <div class="col-md-12">
                MENU
            </div>
        </div><!-- /row -->

        <div class="row">
            <div class="col-md-8">
                NOI DUNG
            </div>
            <div class="col-md-4">
                SIDE BAR
            </div>
        </div><!-- /row -->
        
        <div class="row">
            <div class="col-md-3">
                FOOTER 1
            </div>
            <div class="col-md-3">
                FOOTER 2
            </div>
            <div class="col-md-3">
                FOOTER 2
            </div>
            <div class="col-md-3">
                FOOTER 2
            </div>
        </div><!-- /row -->


    </div>


    <script src="/CP1896M04/assets/vendor/jquery/jquery.min.js"></script>
</body>
</html>