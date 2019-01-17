<div class="row" style="margin-top: 170px">
    <div class="col-sm-3">

        <div style="margin-top: 20px">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" id="remove-border-redius" placeholder="Search For Movies">
                    <div class="input-group-btn">
                        <button class="btn btn-default" id="remove-border-redius" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <h4 style="margin-top: 20px"> Filter By</h4>
        <hr>
        <h3> LANGUAGE </h3>
        <form action="" method="postt">
            <input type="checkbox" name=""> Tamil <br>
            <input type="checkbox" name=""> English <br>
            <input type="checkbox" name=""> Sinhala <br>
        </form>

        <hr>

        <h3> GENRE </h3>
        <form action="" method="postt">
            <input type="checkbox" name=""> Action <br>
            <input type="checkbox" name=""> Comedy <br>
            <input type="checkbox" name=""> Crime <br>
            <input type="checkbox" name=""> 18+ <br>
            <input type="checkbox" name=""> Romance <br>
        </form>


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


            <div class="col-sm-4" id="movie-post">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/Sarkar.jpg" alt=""
                     style="width: 100%;">
                <h4> Sarkar</h4>
                <h5> Tamil</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>


            <div class="col-sm-4" id="movie-post">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/hindi.jpg" alt=""
                     style="width: 100%;">
                <h4> Hindi</h4>
                <h5> Hindi</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>


            <div class="col-sm-4" id="movie-post">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/aqua_man.jpg" alt=""
                     style="width: 100%;">
                <h4> Aquaman</h4>
                <h5> English</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>

            <div class="col-sm-4" id="movie-post">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/Sarkar.jpg" alt=""
                     style="width: 100%;">
                <h4> Sarkar</h4>
                <h5> Tamil</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>


            <div class="col-sm-4" id="movie-post">
                <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/hindi.jpg" alt=""
                     style="width: 100%">
                <h4> Hindi</h4>
                <h5> Hindi</h5>
                <a href="">
                    <button class="btn btn-danger navbar-btn" id="remove-border-redius" style="width: 100%">View Playing
                        Theaters
                    </button>
                </a>
            </div>


            <div class="col-sm-4" id="movie-post">
                <div class="card-group">
                    <div class="card">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/hindi.jpg" alt=""
                             style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>

