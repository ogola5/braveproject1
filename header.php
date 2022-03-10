<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>rent1</title>
    <link rel="stylesheet" href="css/dashtyles2.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src ="js/query.min .js></script>
    <script> src="js/popper.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!--        menu will be here-->
        <div class="col-3 bg-primary">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <i class="fa fa-home 500px fa fa-lg " aria-hidden="true"></i>
                    <span class="h4 text-white"> MY HOME</span>
                    <hr>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home  " aria-hidden="true"  ></i>
                        <span class=" h5 text-white">Home owner</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-users text-white"></i>
                        <span class=" h5 text-white">customer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">
                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                        <span class=" h5 text-white"> gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class=" h5 text-white"> location</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class=" h5 text-white"> settings</span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-mail-forward text-white"> </i>
                        <span class="text-white"> Logout </span>
                    </a>
                </li>
            </ul>


        </div>
        <!--        content will be here-->
        <div class="col-9 bg-light">
            <div class="row bg-white">
                <div class="col-6">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>

                </div>

            </div>
            <div class="row m-2">
                <div class="col-9">
                    <h3>welcome to home makers</h3>
                </div>

            </div>

        </div>
    </div>
</body>
</html>