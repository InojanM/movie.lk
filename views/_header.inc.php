<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="style/myCss.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title> Movie.lk</title>
</head>

<body style="background-image: url('http://localhost/imgs/b.jpg')">

<!-- Nav bar staring -->
<div class="container">

    <div class="container fixed-top" style="background-color: white;height: 70px">
        <div class="row">
            <div class="col">

                <a class="navbar-brand" href="#">
                    <img src="imgs/logo.png" alt="logo" style="height: 70px ; margin-top: -20px">
                </a>

                <div class="text-right">
                    <h4><a href="#">
                            <button class="btn btn-danger navbar-btn" id="remove-border-redius">Login</button>
                        </a></h4>
                    </li></div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="remove-border-redius">

                    <ul class="navbar-nav">
                        <li class="active">
                            <a class="nav-link active" href="views/home.php"><h3 id="nav">HOME</h3></a>
                        </li>

                        <li>
                            <a class="nav-link" href="#"><h3 id="nav"> MOVIES</h3></a>
                        </li>
                        <li>
                            <a class="nav-link" href="#"><h3 id="nav"> THEATERS</h3></a>
                        </li>

                    </ul>


                </nav>
            </div>

        </div>
    </div>
<!--  End Nav bar-->

<!--  Slide show -->
    <div style="margin-top: 70px ">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>



            <div class="carousel-inner">

                <div class="item active">
                    <img src="imgs/Sarkar.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="imgs/petta.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="imgs/visuwasam.jpg" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="imgs/aqua_man.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="imgs/hindi.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>


            </div>


            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>


