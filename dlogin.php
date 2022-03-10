
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/dashtyles2.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src ="js/query.min .js></script>
    <script> src="js/popper.min.js"></script>
</head>
<body class="bg-primary">
<div class="container bg-white">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 bg-register-image">
                    image will be here
                    <div class="col-lg-7">
                        <div class="text-center">
                            <h1 class=" h4 grey mb-4"> welcome again</h1>
                            <form action="handle_dlogin.php" method="post">
                                <div class="row m-3">
                                    <div class="col col-sm-12">
                                        <input class="form-control rounded-pill" type="text" name="emailAddress" placeholder="Email Address">

                                    </div>

                                </div>
                                <div class="row m-3">
                                    <div class="col col-sm-12">
                                        <input class="form-control rounded-pill" type="password" name="password" placeholder="Enter password">

                                    </div>

                                </div>
                                <div class="row m-3">
                                    <div class="col col-sm-6">
                                        <input class="btn-primary" type="submit" name="dlogin" placeholder="dlogin">

                                    </div>

                                </div>
                                <div class="row m-3">
                                    <a href="" class="small text-center"> Forgot Password</a>
                                </div>


                                </div>
                                <div class="row m-3">
                                    <a href="register1.php" class="text-primary small text-center">Create a new account?login</a>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
