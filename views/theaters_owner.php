<div class="text-center">
    <h1> Welcome <?php if (!empty($_SESSION)){
           echo $_SESSION['user'];
        } ?> ! </h1>
    <p><i>"Sellam Premier, thank you again for entrusting movies.lk with your most important business needs. We are
            honored to serve you."</i></p>
    <hr>


    <!-- Adding new movie tag-->
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <button class="btn btn-danger" id="remove-border-redius" type="button"
                    onclick="document.getElementById(add_movie())"> Add New Movie Release In Your Theater !
            </button>

            <form action="" id="new_movie" style="margin-top: 20px;text-align: left ; display: none">

                <div class="form-group">
                    <lable> Select Movie</lable>
                    <select class="form-control" name="" id="remove-border-redius">
                        <option value="">Sakar</option>
                        <option value="">Petta</option>
                        <option value="">Visuwasam</option>
                        <option value="">English Movie</option>
                    </select>
                </div>

                <div class="form-group">
                    <lable> Show Times</lable>
                    <input id="remove-border-redius" type="time" class="form-control" name="">
                </div>

                <div class="form-group">
                    <lable> Relase Date</lable>
                    <input id="remove-border-redius" type="date" class="form-control" name="">
                </div>

                <button type="button" id="remove-border-redius" style="float: right" class="btn btn-danger"> Done
                </button>

            </form>
        </div>
    </div>

    <!-- End Adding new movie tag -->

    <div class="row" style="margin-top: 50px">

        <div class="col-sm-6">
            <div class="text-center"><h4> CURRENT RUNNING MOVIES </h4></div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/Sarkar.jpg" alt="" style="width: 100%">
                </div>
                <div class="col-sm-6">
                    <h3 style="margin-top: 0px">Sarkar</h3>
                    <h5 style="float: left"><i>SHOW TIMES</i> 10:30 | 13:30 | 15:30 | 18:30 | 21:30</h5>

                    <button type="button" class="btn btn-danger" id="remove-border-redius">COMPLETE MOVIE</button>
                    <button type="button" class="btn btn-primary" id="remove-border-redius"
                            onclick="document.getElementById(add_show_time())">EDIT
                    </button>

                    <div class="form-group" id="show_time"
                         style="margin-top: 20px;width: 60%;float: right;display: none">
                        <lable> Edit Show Times</lable>
                        <input id="remove-border-redius" type="time" class="form-control" name="">
                    </div>


                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="text-center"><h4> FUTURE RELEASEING MOVIES </h4></div>

            <div class="row">
                <div class="col-sm-6">
                    <img src="<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/Sarkar.jpg" alt="" style="width: 100%">
                </div>
                <div class="col-sm-6">
                    <h3 style="margin-top: 0px">Sarkar <h4> <i style="color: brown">(Relese on 12/10/2018) </i></h4></h3>

                    <h5 style="float: left"><i>SHOW TIMES</i> 10:30 | 13:30 | 15:30 | 18:30 | 21:30</h5>


                    <button type="button" class="btn btn-primary" id="remove-border-redius">EDIT
                    </button>


                </div>
            </div>
        </div>
    </div>

</div>