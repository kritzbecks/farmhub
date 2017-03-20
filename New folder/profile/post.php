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
                <a href="#" class="list-group-item active">Post a Product</a>
                <a href="#" class="list-group-item">Published Products</a>
                <a href="#" class="list-group-item">Tip Farmers</a>
                <a href="notification.php" class="list-group-item">Notifications</a>
                <a href="#" class="list-group-item">Settings</a>
            </div>
        </div>

        <div class="col-md-9">

            <h1>Post your Crop or Product</h1>


            <h2>Fruits/Vegetables</h2>
            <form target="_blank" onsubmit="try {return window.confirm(&quot;You are submitting information to an external page.\nAre you sure?&quot;);} catch (e) {return false;}">
                <fieldset>


                    <div>
                        <label>Select Fruits/Vegetables</label>
                        <div>
                            <select name="category">
                                <option value="">------------Select Fruits/Vegetables------------</option>
                                <option value="fruits">Fruits</option>
                                <option value="vegetables">Vegetables</option>
                            </select>
                        </div>
                    </div>


                    <div>
                        <label>SubCategory</label>
                        <div>
                            <input name="subcategory" type="text">

                        </div>
                    </div>


                    <div>
                        <label>Variety</label>
                        <div>
                            <input name="variety" type="text">

                        </div>
                    </div>


                    <div>
                        <label>Select Units</label>
                        <div>
                            <select name="units">
                                <option value="">------------Select Units------------</option>
                                <option value="Tons">Tons</option>
                                <option value="Quintal">Quintal</option>
                                <option value="Kgs">Kgs</option>
                            </select>
                        </div>
                    </div>


                    <div>
                        <label>No Of units</label>
                        <div>
                            <input name="nounits" type="number">

                        </div>
                    </div>




                    <div>
                        <label>Rate per unit</label>
                        <div>
                            <input name="rateperunit" type="number">

                        </div>
                    </div>



                    <div>
                        <label>Harvest date</label>
                        <div>
                            <input name="harvestdate" type="date">

                        </div>
                    </div>

                    <div>
                        <label>Bidding Period</label>
                        <div>
                            <input name="biddingperiod" type="number_format">
                        </div>
                    </div>



                    <div>
                        <label>Description</label>
                        <div>
                            <input name="description" type="textarea" rows="4" cols="50">

                        </div>
                    </div>


                    <div>
                        <label>Upload Photo</label>
                        <div>
                            <input name="photo" type="file" accept="image/gif, image/jpeg">

                        </div>
                    </div>


                    <div>
                        <label></label>
                        <div>
                            <button name="add">Add</button>
                        </div>
                    </div>
                </fieldset>
            </form>
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
                <div id="google_translate_element"></div><script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,fr,gu,hi,kn,ml,mr,pa,ta,te,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
