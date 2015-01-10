<!DOCTYPE html>
<html>
    <head>
        <title> Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url(). 'public/css/bootstrap.min.css'; ?>" rel="stylesheet">
        <link href="<?php echo base_url(). 'public/css/style.css'; ?>" rel="stylesheet">

    </head>
    <body class="body-bg">

    <!--start-main-container: -->


        <div div="header">

        </div> <!--header-->

        <div class="container-wrapper">

        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-6" style="border:1px solid #f2f2f2">
                    <img class="logoImg pull-left" src= "<?php echo base_url(). 'public/img/logo.png'; ?>" />
                </div>
            </div>
            <div style="clear:both"> </div>
            <p class="pull-right" style="position:relative; top:-30px"> Already have an Account ? <a class="btn btn-success " href="<?php echo base_url(). 'site/login'?>"> Login </a> </p>


        </div>


        <!----star:div content-wrapper-->
        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-md-offset-4 col-md-5" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center><h2> Sign Up !</h1></center>
                            <div sytle="clear:both"> </div>
                             <form role="form" action="<?php echo base_url(). 'user/register'?>" method="POST" id="frm-register">
                                    <div class="form-group">
                                        <label class="sr-only"for="lastname">Lastname </label>
                                        <input type="text" class="form-control" id = "lastname" placeholder = "Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label class = "sr-only" for = "firstname">First Name</label>
                                        <input type="text" class="form-control" id = "firstname" placeholder = "First Name">
                                    </div>
                                    <div class="form-group">
                                        <label class = "sr-only" for = "email">Email</label>
                                        <input type="text" class="form-control" id = "email" placeholder = "Email: example@yahoo.com">
                                    </div>
                                    <div class="form-group">
                                        <label class = "sr-only" for = "username">Username</label>
                                        <input type="text" class="form-control" id = "username" placeholder = "Username:">
                                    </div>
                                    <div class="form-group">
                                        <label class = "sr-only" for = "password">Password</label>
                                        <input type="text" class="form-control" id = "password" placeholder = "Password">
                                    </div>
                                    <div class="form-group">
                                        <label class = "sr-only" for = "reenterpassword">Retype Password</label>
                                        <input type="text" class="form-control" id = "reenterpassword" placeholder = "Re-enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label  class = "form-inline" for = "birthdate">BirthDate</label>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="clear:both"> </div>
                                                 <select class="form-control" placeholder="Month" id="birthdate">
                                                    <option> January </option>
                                                    <option> February </option>
                                                    <option> March </option>
                                                    <option> April </option>
                                                    <option> May </option>
                                                    <option> June </option>
                                                    <option> July </option>
                                                    <option> August </option>
                                                    <option> September </option>
                                                    <option> October </option>
                                                    <option> Novemeber </option>
                                                    <option> December </option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4">
                                               <select class="form-control cols-xs-1"placeholder="Month" id="birthday" >
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4">
                                               <select class="form-control cols-xs-1"placeholder="Month" id="birthyear" >
                                                    <option>1994</option>
                                                    <option>1995</option>
                                                    <option>1996</option>
                                                    <option>1997</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class = "" for = "reenterpassword">Gender</label>
                                         <div class="row">

                                            <div class="col-xs-4">
                                                <div class="radio">
                                                  <label>
                                                    <input type="radio" name="optionsRadios" id="opt-gender" value="M" checked>
                                                    Male
                                                  </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="radio">
                                                  <label>
                                                    <input type="radio" name="optionsRadios" id="opt-gender" value="F" checked>
                                                    Female
                                                  </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                <p class="navbar-text"><small>By clicking on Sign up, you agree on the <mark>Terms of Use Agreement</mark> </small> </p>
                                <button id="btn-sign-up" type="submit" class="btn btn-success pull-right"> Sign Up</button>


                            <!--</form> -->

                        </div>
                    </div>
                </div>
            </div>
        </div> <!----end:div content-wrapper-->

       <div id="footer">
            <div class="navbar navbar-default navbar-fixed-bottom">
                <p class="navbar-text pull-center">iConnect Copyright 2015 </p>

            </div>
        </div>
         <!--div:end-footer-->

        <!--end-div-main-container: -->
    </body>
    <script src="<?php echo base_url(). 'public/js/jquery-2.1.1.js'; ?>" type="text/javascript"> </script>
    <script src="<?php echo base_url(). 'public/js/bootstrap.js' ?>" type="text/javascript"> </script>
    <script src="<?php echo base_url(). 'public/js/registration.js' ?>" type="text/javascript"> </script>


</html>
