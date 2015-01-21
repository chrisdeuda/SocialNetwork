<!DOCTYPE html>
<html>
    <head>
        <title> Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url(). 'public/css/bootstrap.min.css'; ?>" rel="stylesheet">
        <link href="<?php echo base_url(). 'public/css/style.css'; ?>" rel="stylesheet">

    </head>
    <body class="body-bg">

    <!--start-main-container: -->

    <div id="main-container">
        <div div="header">
            <div class="navbar navbar-inverse navbar-static-bottom">
                <div class="container">
                    <a class="navbar-brand"> iConnect</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#"> Home</a> </li>
                            <li><a href="#"> Blog</a> </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"> </b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Facebook </a></li>
                                    <li><a href="#">Tweeter </a></li>
                                    <li><a href="#">Google</a></li>
                                </ul>

                            </li>

                            <li><a href="#"> About</a> </li>
                            <li><a href="#contact" data-toggle="modal"> Contact Us</a> </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--header-->

        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div style="width:100%; height:700px; border:1px solid black; background-color:white" >
                            Picture

                        </div>

                    </div>
                    <div class="col-lg-7">










                        <div style="width:100%; height:700px; border:1px solid black; background-color:white" >
                         <!--Start Update Status-->
                        <div id="update-status">
                            <p><span class="glyphicon glyphicon-pencil" aria-hidden="true">Update Status</span> </p>
                            <form>

                            </form>



                        </div>



                        <!--End Update Status-->


                        </div>

                    </div>

                    <div class="col-lg-3">
                        <div style="width:100%; height:700px; border:1px solid black; background-color:white" >
                        adds

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




    </div><!--end-div-main-container: -->

    </body>
    <script src="<?php echo base_url(). 'public/js/jquery-2.1.1.js'; ?>" type="text/javascript"> </script>
    <script src="<?php echo base_url(). 'public/js/bootstrap.js' ?>" type="text/javascript"> </script>



</html>
