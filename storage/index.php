


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (p) {
                var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
                var mapOptions = {
                    center: LatLng,
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                var marker = new google.maps.Marker({
                    position: LatLng,
                    map: map,
                    title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
                });

                google.maps.event.addListener(marker, "click", function (e) {
                    var infoWindow = new google.maps.InfoWindow();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(map, marker);

                });
            });
        } else {
            alert('Geo Location feature is not supported in this browser.');
        }
    </script>
    <div id="dvMap" style="width: 500px; height: 500px">
    </div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
