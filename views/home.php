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
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/Sarkar.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/petta.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/visuwasam.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/aqua_man.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/hindi.jpg" alt="Chicago" style="width:100%;">
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

<div class="row">
    <div class="col-sm-3">
        <h4 class="text-center" style="margin-top: 20px"> TOP MOVIES</h4>
        <h5> IN YOUR REGION </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> Sarkar</li>
            <li class="list-group-item"> Petta</li>
            <li class="list-group-item"> Visuwasam</li>
            <li class="list-group-item"> Hindi Movie</li>
            <li class="list-group-item"> Aquaman</li>
        </ul>

    </div>

    <div class="col-sm-9 ">

        <div class="row" style="margin-top: 20px">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

                <div class="text-center">

                    <button type="button" class="btn btn-default active" id="remove-border-redius"><h5> NOW PLAYING</h5>
                    </button>
                    <button type="button" class="btn btn-default" id="remove-border-redius"><h5> COMING SOON</h5>
                    </button>
                </div>

            </div>
            <div class="col-sm-3">
                <a href=""><h5> View More !</h5></a>
            </div>
        </div>

        <div class="row" style="margin-top: 50px">

            <div class="col-sm-4">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/Sarkar.jpg" alt=""
                     style="width: 100%;border-bottom-color: green ; border-bottom: 40px ; border-bottom: solid">
                <h4> Sarkar</h4>
                <h5> Tamil</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>


            <div class="col-sm-4">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/hindi.jpg" alt=""
                     style="width: 100%;border-bottom-color: green ; border-bottom: 40px ; border-bottom: solid">
                <h4> Hindi</h4>
                <h5> Hindi</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>


            <div class="col-sm-4">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/aqua_man.jpg" alt=""
                     style="width: 100%;border-bottom-color: green ; border-bottom: 40px ; border-bottom: solid">
                <h4> Aquaman</h4>
                <h5> English</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>

        </div>


    </div>
</div>



