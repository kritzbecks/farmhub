<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FarmBid - Profile </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">



    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <style>


        body {
            padding-top: 70px; }


        .caption h4 {
            white-space: nowrap;
        }

        .thumbnail img {
            width: 100%;
        }



        .thumbnail .caption-full {
            padding: 9px;
            color: #333;
        }

        footer {
            margin: 50px 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
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
            <a class="navbar-brand" href="#">Farmhub</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav right">
                <li>
                    <a href="/market">Market</a>
                </li>
                <li>
                    <a href="#">Post</a>
                </li>
                <li>
                    <a href="#">Bidding</a>
                </li>
                <li>
                    <a href="#">Farm Tips</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log oout</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <p class="lead">Hello Mr.XXX</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Post a Product</a>
                <a href="#" class="list-group-item">Published Products</a>
                <a href="#" class="list-group-item active">Tip Farmers</a>
                <a href="#" class="list-group-item">Notifications</a>
                <a href="#" class="list-group-item">Settings</a>
            </div>
        </div>

        <div class="col-md-9">

            <h1>Share your thoughts with other farmers</h1>

            <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

            <div class="form-group">
                <label for="name"><span class="req">*</span> Type:</label> <input class="form-control" id="txt" placeholder="your full name" name="firstname" required="" type="text">
            </div>

            <div class="form-group">
                <label for="name"><span class="req">*</span> Title:</label> <input class="form-control" id="txt" placeholder="your full name" name="firstname" required="" type="text">
          </div>

            <label>Your Suggestions : </label>
            <textarea name="editor1" id="editor1" rows="10" cols="80">Enter your thoughts </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

<br/>
            <button class="btn btn-primary btn-block">POST</button>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

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
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>