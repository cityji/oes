<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Quizlet || E-QUIZ </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!--alert message-->
    
    
    <style>
          body {
        position: relative;
        /* Set the parent container to relative positioning */
        min-height: 100vh !important;
        /* Ensure the parent container takes up at least the full viewport height */
        /* padding-bottom: 20px; */
        /* Provide some space at the bottom for the footer */
        color: black;
        font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
        /* text-align: center; */
        /* img size is 50x50 */
        background: linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, .5)), url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0 !important;
        --webkit-animation: bg-scrolling-reverse 0.92s infinite;
        /* Safari 4+ */
        -moz-animation: bg-scrolling-reverse 0.92s infinite;
        /* Fx 5+ */
        -o-animation: bg-scrolling-reverse 0.92s infinite;
        /* Opera 12+ */
        animation: bg-scrolling-reverse 0.92s infinite;
        /* IE 10+ */
        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        -o-animation-timing-function: linear;
        animation-timing-function: linear;
        overflow-y: scroll !important;
        color: black
    }
    .footer{
      z-index: 2;
      position: relative;
      bottom: 0;
      width: 100vw;
      margin:0px !important;
    }
    *{
        text-align: justify;
        font-size:1rem!important;
    }
    .SM{
      font-size:1rem!important;
    }
    .M{
      font-size:1.5rem!important;
    }
    .L{
    }
    .XL{
      font-size:2.5rem!important;
    }
    .XXL{
      font-size:3rem!important;
    }
    .input-group{
      padding:5px;
      border-radius: 5px;
    }
    .blur{
      height:100%;
      margin-top:2rem;
      border-radius: 0.5rem;
      width: auto;
border: 1px solid gainsboro;
background: white;
backdrop-filter: blur(2.5px);
    }

    .panel > div:nth-child(2) > div:nth-child(1){
        padding:3rem;
    }

    </style>
    <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <!--alert message end-->

</head>

<body>

    <!--header start-->
    <div class="row header">
        <div class="col-lg-6">
            <span class="logo" style="font-size: 2rem !important;">QuizLet : EQuiz</span>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <?php
      include_once 'dbConnection.php';
      session_start();
      if ((!isset($_SESSION['email']))) {
        echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';
      } else {
        echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';
      }
      ?>

            <a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home"
                    aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
        </div>
    </div>

    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title title1"><span style="color:#0c3966">Log In</span></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                        <fieldset>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id"
                                        class="form-control input-md" type="email">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password"
                                        class="form-control input-md" type="password">

                                </div>
                            </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    </fieldset>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <!--sign in modal closed-->

    <!--header end-->

    <div class="bg1">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 panel" style="color:black; min-height:430px;">
                <h2 class="XXL" style="font-family:'typo'; text-align:center;color:#000066">FEEDBACK / REPORT A BUG</h2>
                <div>
                    <?php if (@$_GET['q'])
            echo '<span"><span class="L glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
          else {
            echo ' 
            <div class="row">
            <hr>
            <p class="L alert alert-success">
            To send me your feedback through e-mail id: 
            <a href="mailto:saurabh.paytmservices@gmail.com" style="color:#000000">Click Here</a>
            </p>
<p class="alert alert-info">To directly submit your feedback Please fill the form enteries below :-</p>
<hr>
<form role="form" method="post" action="feed.php?q=feedback.php">
  <div class="row">
    <div class="col-md-3"><b>Name :</b></div>
    <div class="col-md-9">
      <div class="form-group">
        <input id="name" name="name" placeholder="Enter your name " class="form-control input-md" type="text">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3"><b>Subject :</b></div>
    <div class="col-md-9">
      <div class="form-group">
        <input id="subject" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3"><b>E-Mail address :</b></div>
    <div class="col-md-9">
      <div class="form-group">
        <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
      </div>
    </div>
  </div>
  <div class="form-group">
    <textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
  </div>
  <div class="form-group" align="center">
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
  </div>
</form>
';
          } ?>
                </div>
                <!--col-md-6 end-->
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    </div>
    <!--container end-->


    <!--Footer start-->
    <div class="row footer">
        <div class="col-md-3 box">
            <a href="./about.php" target="_blank">About us</a>
        </div>
        <div class="col-md-3 box">
            <a href="about.php" data-toggle="modal" data-target="#login">Admin Login</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#developers">Developers</a>

        </div>
        <div class="col-md-3 box">
            <a href="feedback.php" target="_blank">Feedback</a>
        </div>
    </div>
   <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:#0c3966">Developers</span></h4>
          <a href="./about.php" class="label label-primary pull-left" style="font-size:3rem;"
              title="Team Name : ">sQUAD</a>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col">
              <p class="lead" style="font-family:'typo';width: 90%;margin: 3rem auto;text-align: justify;">
                <img src="image/dev.jpeg"alt="TEAM sQUAD" style="max-width: 17rem;height: 18rem;margin-left: 0px;margin:1.5rem;" class="img-rounded pull-left">
              
                sQUAD is a energetic group of four people devoted to learning and sharing their knowledge
                through hands-on involvement in projects. Their excitement drives them to handle challenges and
                make inventive arrangements utilizing their mastery. <br><br>
                With focus on building web projects, sQUAD points
                to provide unique and effective answers to real-world issues. Their collaborative approach and
                commitment to consistent development make them a dynamic force within the field of web improvement. 
              </p>
            </div>
          </div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:#0c3966;font-family:'typo' ">LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--footer end-->


</body>

</html>