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
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="glyphicon glyphicon-search btn lg" style=" color:green;"> </span>

                        </div>

                    </form>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#"> Profile</a> </li>
                            <li class="in-active"><a href="#"> Home</a> </li>
                            <li class="in-active"><a href="#"><span class="glyphicon glyphicon-user">  </span></a> </li>
                            <li class="in-active"><a href="#"><span class="glyphicon glyphicon-comment icon-large" style=> </span></a> </li>
                            <li class="in-active"><a href="#"><span class="glyphicon glyphicon-globe"> </span></a> </li>

                            <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"> </span><b class="caret"> </b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Settings </a></li>
                                <li><a href="#">Logout </a></li>
                            </ul>

                        </li>






                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--header-->

        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="panel panel-default"  >
                        <!--Start User Profile Picture-->
                            <div class="" id="profile_picture">
                                <table  class="table" style="border:0px"  >
                                    <tr >
                                        <td  style="width:50px; height:50px; margin:0px; padding:5px" rowspan="2"> <img src="" style="width:50px; height:50px" />  </td>
                                        <td>
                                            <ul style="maring:0px; padding:0px; list-style-type:none;">
                                                <li>Name</li>
                                                <li>Edit Settings </li>
                                            </ul>
                                        </td>
                                     </tr>
                                </table>
                            </div>  <!--@End User Profile Picture-->

                            <div id="" >
                                <ul>
                                    <li class="glyphicon glyphicon-book" style="left:-20px;"> News Feed</li>
                                    <div style="clear:both"> </div>
                                    <li class="glyphicon glyphicon-envelope" style="left:-20px;"> Messages </li>
                                </ul>
                            </div>

                            <div class="panel-heading">
                                <h4> Groups </h4>
                            </div>
                            <div class="panel-body">


                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">

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


        <div id="login">


        </div>


        $('#login').focus(){
            this.removeClass('removeClass')
            this.addClass('');

        }








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
