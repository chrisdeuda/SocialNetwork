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

        <div class="container">

        </div>



        <!----main-content-wrapper-->
        <div class="container" style="margin-top:10%">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center><img class="logoImg" src= "<?php echo base_url(). 'public/img/logo.png'; ?>" /></center>
                            <div sytle="clear:both"> </div>
                             <form role="form">
                                <div class="form-group">
                                    <lable for="username">Username</lable>
                                    <input type="text" class="form-control" id = "username" placeholder = "Your Username">

                                </div>
                                <div class="form-group">
                                    <lable for="password">Password</lable>
                                    <input type="text" class="form-control" id = "password" placeholder = "Your Password">
                                </div>

                                <a href="<?php echo base_url(). 'site/register'; ?>" class="btn btn-info pull-left"> Register </a>
                                <button type="submit" class="btn btn-success pull-right"> Login</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--end:div container-->
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


</html>
