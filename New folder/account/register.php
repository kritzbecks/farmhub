
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <title>FarmBid</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>


        body {
            background-color: white;
        }

        #loginbox {
            margin-top: 30px;
        }

        #loginbox > div:first-child {
            padding-bottom: 10px;
        }

        .iconmelon {
            display: block;
            margin: auto;
        }

        #form > div {
            margin-bottom: 25px;
        }

        #form > div:last-child {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .panel {
            background-color: transparent;
        }

        .panel-body {
            padding-top: 30px;
            background-color: rgba(2555,255,255,.3);
        }

        #particles {
            width: 100%;
            height: 100%;
            overflow: hidden;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            z-index: -2;
        }

        .iconmelon,
        .im {
            position: relative;
            width: 150px;
            height: 150px;
            display: block;
            fill: #525151;
        }

        .iconmelon:after,
        .im:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        body {
            padding-top: 70px;
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-fixed-top .nav {
            padding: 15px 0;
        }

        .navbar-fixed-top .navbar-brand {
            padding: 0 15px;
        }

        footer {
            padding: 30px 0;
        }

        @media(min-width:768px) {
            body {
                padding-top: 100px; /* Required padding for .navbar-fixed-top. Change if height of navigation changes. */
            }

            .navbar-fixed-top .navbar-brand {
                padding: 15px 0;
            }
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/150x50&text=Logo" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">


    <h2 class="title text-center">Registration For CropBid</h2>

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

<form class="form-horizontal">
    <fieldset>




        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="contact">Contact no.</label>
            <div class="col-md-4">
                <input id="contact" name="contact" type="text" placeholder="Enter your contact no." class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
            <div class="col-md-4">
                <select id="blood_group" name="blood_group" class="form-control">
                    <option value="-1">Select</option>
                    <option value="1">A+</option>
                    <option value="2">B+</option>
                    <option value="3">AB+</option>
                    <option value="4">O+</option>
                    <option value="5">A-</option>
                    <option value="6">B-</option>
                    <option value="7">AB-</option>
                    <option value="8">O-</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="street">Street</label>
            <div class="col-md-4">
                <input id="street" name="street" type="text" placeholder="Enter your street" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="area">Area</label>
            <div class="col-md-4">
                <input id="area" name="area" type="text" placeholder="Enter your area" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">City</label>
            <div class="col-md-4">
                <input id="city" name="city" type="text" placeholder="Enter your city" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="dist">District</label>
            <div class="col-md-4">
                <input id="dist" name="dist" type="text" placeholder="Enter your district" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">
                <button id="signup" name="signup" class="btn btn-success">Sign Up</button>
            </div>
        </div>

    </fieldset>
</form>


    </div>


    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
