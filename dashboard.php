<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/dashtyle.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src ="js/query.min.js></script>
    <script> src="js/popper.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!--        The menu will be here-->
        <div class="col-3 bg bg-primary">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <i class="	fa fa-500px fa fa-lg text-white"></i>
                    <span class=" h4 text-white" >BRAVE ADMIN</span>
                </li>

                <hr>

                <li class="nav-item navstyle">
                    <a class="nav-link " href="#">
                        <i class="fa fa-dashboard fa fa-lg text-white"></i>
                        <span class="text-white"> Dashboard</span>
                    </a>
                </li>

                <hr>
                <li class="nav-item navstyle">
                    <a class="nav-link" href="#">
                        <i class="fa fa-users text-white"></i>
                        <span class="text-white">participants</span>
                    </a>

                </li>
                <li class="nav-item navstyle">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        <i class="fa fa-cogs text-white"></i>
                        <span class="text-white"> componenets</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item navstyle">
                    <a class="nav-link" href="#">
                        <i class="fa fa-file text-white"></i>
                        <span class="text-white">documents</span>
                    </a>
                </li>
                <li class="nav-item navstyle">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        <i class="fa fa-line-chart text-white "></i>
                        <span class="text-white"> charts</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item navstyle">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        <i class="fa fa-wrench text-white"></i>
                        <span class="text-white">settings</span>
                    </a>
                </li>
                <hr>
            </ul>

        </div>
        <!--        The content will be here-->
        <div class="col-9 bg-light">
            <div class="row bg-white">

                <div class="col-6">
                    <nav class="navbar navbar-light ">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-6">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell ">
                                                <span class="badge rounded-pill bg-danger">5+</span>
                                            </i>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope"></i>
                                            <span class="badge rounded-pill bg-danger">5+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            EVANCE OGOLA
                                        </a>

                                    </li>
                                    <li>
                                        <img src="img/female%20avatar.png" alt="" class="rounded-circle" width="50" height="50" >
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="row m-2">
                <div class="col-6">
                    <h3 class="grey">Dashboard</h3>

                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        view Report
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">BRAVE ADMIN REPORT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered m-3"></table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row m-2">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col"></div>
                                <span class="text-white">EARNINGS</span>
                                <div class="grey"> ksh 600000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-dollar fa2x"></i>

                            </div>
                        </div>

                    </div>


                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col"></div>
                                    <span class="text-primary">TASKS</span>
                                    <div class="h5 grey">5</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-bars grey"></i>

                                </div>
                                <div class="progress">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"></div>
                                    <span class="text-primary">REQUESTS</span>
                                    <div class="h5 grey">30</div>
                                </div>
                                <div class="col-auto">
                                    <i class=""></i>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>







            </div>

        </div>

</body>
</html>