<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Quizlet || E-QUIZ </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value; var letters = /^[A-Za-z]+$/; if (y == null || y == "") { alert("Name must be filled out."); return false; }
      var z = document.forms["form"]["college"].value; if (z == null || z == "") { alert("college must be filled out."); return false; } var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf("."); if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) { alert("Not a valid e-mail address."); return false; }
      var a = document.forms["form"]["password"].value; if (a == null || a == "") { alert("Password must be filled out"); return false; } if (a.length < 5 || a.length > 25) { alert("Passwords must be 5 to 25 characters long."); return false; }
      var b = document.forms["form"]["cpassword"].value; if (a != b) { alert("Passwords must match."); return false; }
    }
  </script>


</head>

<body>
  <div class="header">
    <div class="row">
      <div style="margin: 0px 3rem;">
        <span class="logo pull-left">QuizLet : EQuiz</span>
        . <div class="pull-right">

          <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span
              class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
              class="title1"><b>Login</b></span>
          </a>
          <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#SignupModel"><span
              class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
              class="title1"><b>Sign-up</b></span>
          </a>
        </div>

      </div>
      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:#0c3966">Login with your existing ID</span></h4>
            </div>
            <div class="modal-body mt-9">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email"></label>
                    <div class="col-md-6">
                      <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"
                        type="email">
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

      <!-- sign in form begins -->
      <div class="modal fade" id="SignupModel">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:#0c3966">Register | Sign Up</span></h4>
            </div>
            <div class="modal-body mt-9">
              <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()"
                method="POST">
                <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>
                    <div class="col-md-12">
                      <input id="name" name="name" placeholder="Enter your name" class="form-control input-md"
                        type="text">
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="gender"></label>
                    <div class="col-md-12">
                      <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                        <option value="Male">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>
                    <div class="col-md-12">
                      <input id="college" name="college" placeholder="Enter your college name"
                        class="form-control input-md" type="text">

                    </div>
                  </div>


                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label title1" for="email"></label>
                    <div class="col-md-12">
                      <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"
                        type="email">

                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="mob"></label>
                    <div class="col-md-12">
                      <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md"
                        type="number">

                    </div>
                  </div>


                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="password"></label>
                    <div class="col-md-12">
                      <input id="password" name="password" placeholder="Enter your password"
                        class="form-control input-md" type="password">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-12control-label" for="cpassword"></label>
                    <div class="col-md-12">
                      <input id="cpassword" name="cpassword" placeholder="Conform Password"
                        class="form-control input-md" type="password">

                    </div>
                  </div>
                  <?php if (@$_GET['q7']) {
                    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                  } ?>
                  <!-- Button -->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for=""></label>
                    <div class="col-md-12">
                      <input type="submit" class="sub" value="sign up" class="btn btn-primary" />
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--sign in modal closed-->
    </div>
    <!--header row closed-->
  </div>

  <!-- starting actual vmin body with 80% of minimum viewport height -->
  <div class="bg1 container-fluid" style="min-height:80vmin">
    <div class="row">
      <div class="col">
        <h1 class="mt-5">Welcome to QuizLet!</h1>
        <p class="lead">We're so glad you're here. This is a website that provides a variety of quizzes to help you
          test your abilities and learn new concepts.</p>
        <p>Whether you're looking to brush up on your Programming skills, learn about fundamental concepts, or simply
          test your knowledge, we have a quiz for you.</p>
        <p>We believe that learning should be fun and engaging, and that's why we've created our quizzes to be both
          challenging and entertaining. We also believe that learning should be accessible to everyone, so our quizzes
          are available in a variety of languages and difficulty levels.</p>
        <p>We hope you enjoy your time on our website. Please feel free to contact us if you have any questions or
          suggestions.</p>
      </div>
      <div class="col">
        <!-- card of quiz start -->
        <div class="col-sm-4">
          <div class="card text-black bg-info" style="padding:1.5rem; margin:1rem; border-radius:1rem">
            <div class="card-body">
              <h3 class="card-title text-danger">C++ Coding</h3>
              <p class="card-text text-primary">Test your knowledge about different aspects of C++. This quiz cover a
                wide range of topics, from basic syntax to advanced concepts
              </p>
              <a href="./account.php?q=quiz&step=2&eid=5589222f16b93&n=1&t=2" class="btn btn-primary">Take Quiz As
                Guest</a>
            </div>
          </div>
        </div>
        <!-- card of quiz end -->
      </div>
    </div>
  </div><!--container end-->

  <!--Footer start-->
  <div class="row footer">
    <div class="col-md-3 box">
      <a href="http://www.projectworlds/online-examination" target="_blank">About us</a>
    </div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
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
        </div>

        <div class="modal-body">
          <p>
          <div class="row">
            <div class="col-md-4">
              <img src="image/dev.jpeg" width=100 height=100 alt="TEAM HexARRAYS" class="img-rounded">
            </div>
            <div class="col-md-5">
              <a href="https://cityji.github.io/portfolio/" style="color:#A8D1FD; font-family:'typo' ; font-size:18px"
                title="Find on Facebook">HexARRAYS</a>
              <h4 style="color:#A8D1FD; font-family:'typo' ;font-size:16px" class="title1">+91 6263823386</h4>
              <h4 style="font-family:'typo' ">meghanatamrakar@gmail.com</h4>
              <h4 style="font-family:'typo' ">APS UNIVERSITY</h4>
            </div>
          </div>
          </p>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:#0c3966;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
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