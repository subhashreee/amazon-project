<?php include('config/server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
        <script src="js/react.min.js"></script>
        <script src="js/react-dom.min.js"></script>
        <script src="js/browser.min.js"></script>
        
    </head>
    <body style="background-color: #2e6da4">
        <div id="registerpage" style="height: 100%">
            <div class="container-fluid decor_bg" id="register-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <div id="logo">
                            <h1 style="font-family: Enriqueta; font-size: 128px"><b>connect in.</b></h1>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><b>REGISTER</b></h4>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="register.php">
                                    <?php include('config/errors.php'); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email" >
                                    </div>
                                    <div class=form-group>
                                        <input type="text" class="form-control" placeholder="Registration Number" name="reg">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-inline" style="border: none">
                                            <div class="col-md-2">
                                                <p>Year</p>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="year" value="1"> 1
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="year" value="2"> 2
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="year" value="3"> 3
                                            </div>
                                            <div class="col-md-2">
                                                <input type="radio" name="year" value="4"> 4
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div>
                                        <select class="form-control" name="dept">
                                            <option disabled selected value>Department</option>
                                            <option>Computer Science and Engineering</option>
                                            <option>Electronics and Communication Engineering</option>
                                            <option>Electronics and Instrumentation Engineering</option>
                                            <option>Electrical and Electronics Engineering</option>
                                            <option>Information Technology</option>
                                            <option>Software Engineering</option>
                                            <option>Mechanical Engineering</option>
                                            <option>Biotechnology</option>
                                            <option>Genetics</option>
                                            <option>Chemical Engineering</option>
                                            <option>Biomedical Engineering</option>
                                            <option>Automobile Engineering</option>
                                            <option>Aerospace Engineering</option>
                                            <option>Mechatronics</option>
                                            <option>Nanotechnology</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="passmatch">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="register_user" class="btn btn-primary">Register</button></a><br><br>
                                    </div>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Already have an account? <a href="login.php">Login</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'config/footerp.php'; ?>
        <script type="text/babel">
            ReactDOM.render(
                    document.getElementById('registerpage'),
                    document.getElementById('container')
                    );
        </script>
    </body>
</html>
