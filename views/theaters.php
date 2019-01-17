<div class="row" style="margin-top: 170px ">
    <div class="col-sm-3">

        <div style="margin-top: 20px">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" id="remove-border-redius" placeholder="Search For Theaters">
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
        <h3> LOCATION </h3>
        <form action="" method="postt">
            <input type="checkbox" name=""> Batticaloa <br>
            <input type="checkbox" name=""> Colombo <br>
            <input type="checkbox" name=""> Jaffna <br>
            <input type="checkbox" name=""> Trincomalee <br>
            <input type="checkbox" name=""> Jala <br>
            <input type="checkbox" name=""> Nuwaraliya <br>
            <input type="checkbox" name=""> Hatton <br>
        </form>

        <hr>


    </div>



    <div class="col-sm-9 ">

        <h1 class="text-center" style="margin-bottom: 20px"> Theaters</h1>



        <div class="card" style="margin-bottom: 20px ; border-left:gold solid 10px ;" id="remove-border-redius">
            <div class="card-header">
                <b style="color: chocolate">MAJESTIC CINEMA </b>
                <button style="float: right" type="button" onclick="document.getElementById(view())"> VIEW PLAYING MOVIES</button>
                <p> COLOMBO 04 | Tel 011 3523256 </p>
            </div>
            <!--  JS hide post-->
            <div class="card-body" id="view-page" style="display: none">

                <h5 class="card-title">Now Playing</h5>


                <div class="row">
                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p1.jpg" alt="" style="width: 100%">
                       <h4 style="color: darkred"> Show Times</h4>
                        <h5> 10:30 | 13.30 | 16:30 | 21:30  </h5>

                    </div>

                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p2.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p3.jpg" alt="" style="width: 100%;">
                    </div>

                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p4.jpg" alt="" style="width: 100%">
                    </div>

                </div>

            </div>
        </div>

        <div class="card" style="margin-bottom: 20px ; border-left:gold solid 10px ;" id="remove-border-redius">
            <div class="card-header">
                <b style="color: chocolate">SELLAM PREMIER </b>
                <button style="float: right" type="button" onclick="document.getElementById(view())"> VIEW PLAYING MOVIES</button>
                <p> BATTICALOA | Tel 065 3523256 </p>
            </div>
            <!--  JS hide post-->
            <div class="card-body" id="view-page" style="display: none">

                <h5 class="card-title">Now Playing</h5>


                <div class="row">
                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p1.jpg" alt="" style="width: 100%">
                        <h4 style="color: darkred"> Show Times</h4>
                        <h5> 10:30 | 13.30 | 16:30 | 21:30  </h5>

                    </div>

                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p2.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col-sm-3" style="margin-bottom: 30px">
                        <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/p3.jpg" alt="" style="width: 100%;">
                    </div>


                </div>

            </div>
        </div>





    </div>


</div>

