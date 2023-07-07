<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quizlet || About Project</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- font awesome cdn -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- fonts -->
  <link rel="stylesheet" href="fonts/fonts-1.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <!-- normalize css -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- custom css -->
  <link rel="stylesheet" href="css/utility.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <style>
    .video-container {
    height: 100%;
    width: 100%;
    position: relative;
    padding:0px;
}

.video-container video {
  width: 100%;
  height: 100%;
  position: absolute;
  object-fit: cover;
  z-index: 0;
}

/* Just styling the content of the div, the *magic* in the previous rules */
.video-container .caption {
  z-index: 1;
  position: relative;
  text-align: center;
  /* color: #dc0000; */
  padding: 10px;
}
  </style>
</head>

<body>
  <!-- navbar  -->
  <div class="header" id="hamburger">
    <div class="row">
      <div style="margin: 0px 3rem;">
        <span class="logo pull-left">QuizLet : EQuiz</span>
        <div class="pull-right">




          <a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home"
              aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
        </div>
      </div>
      <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#SignupModel">
        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;
        <span class="title1"><b>Sign-up</b></span>
      </a>
    </div>

  </div>
  <!--sign in modal start-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content title1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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
                  <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md"
                    type="password">
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
                  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
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
                  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md"
                    type="text">

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
                  <input id="password" name="password" placeholder="Enter your password" class="form-control input-md"
                    type="password">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-12control-label" for="cpassword"></label>
                <div class="col-md-12">
                  <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md"
                    type="password">

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
  <!-- end of navbar  -->

  <!-- header -->
  <header class="flex header-sm video-container" style="backdrop-filter: blur(5px);">
    <video autoplay muted loop id="myVideo">
      <source src="./dynamic-assets/background.mp4"
        type="video/mp4" />
    </video>
    <div class="container caption" style="backdrop-filter: blur(5px);">
      <div class="header-title">
        <h1 style="font-size: 6.8rem;">About</h1>
        <p style="font-size: 1.8rem;">We're so glad you're here. This is a website that provides a variety of quizzes to
          help you
          test your abilities and learn new concepts</p>
      </div>
    </div>
  </header>
  <!-- header -->

  <!-- about section -->
  <section id="about" class="py-4">
    <div class="container">
      <div class="title-wrap">
        <span class="sm-title" style="font-size: 2.2rem;">things to know about us</span>
        <h2 class="lg-title" style="font-size: 4.8rem;">our story</h2>
      </div>

      <div class="about-row">

        <div class="row">
          <div class="col-md-6">
            <img src="image/dev.jpeg" alt="about img">
          </div>
          <div class="col-md-6">
            <h2>15 Years of Experience</h2>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae sed aperiam qui
              repudiandae earum voluptatem. Modi at inventore omnis veniam necessitatibus exercitationem vel nesciunt
              delectus ex officiis, culpa doloremque odit illo saepe placeat. Delectus consequuntur reprehenderit omnis
              accusantium officiis!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique explicabo blanditiis
              quidem consequuntur qui quaerat fuga iste tenetur consequatur porro. Aliquam maiores alias doloribus at
              quisquam quo numquam perferendis. Odit!</p>
          </div>
        </div>
      </div>
  </section>
  <!-- end of about section -->


  <!--Footer start-->
  <div class="row footer">
    <div class="col-md-3 box">
      <a href="about.php" target="_blank">About us</a>
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
              class="sr-only">Close</span>
          </button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:#0c3966">Developers</span></h4>
          <a href="./about.php" class="label label-primary pull-left" style="font-size:3rem;" title="Team Name : ">sQUAD
          </a>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col">
              <p class="lead" style="font-family:'typo';width: 90%;margin: 3rem auto;text-align: justify;">
                <img src="image/dev.jpeg" alt="TEAM sQUAD"
                  style="max-width: 17rem;height: 18rem;margin-left: 0px;margin:1.5rem;" class="img-rounded pull-left">

                sQUAD is a energetic group of four people devoted to learning
                through hands-on involvement in web improvement. Their excitement drives them to handle challenges and
                make inventive arrangements utilizing their mastery. With a focus on building web projects, sQUAD points
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


  <!-- js -->
  <script src="js/script.js"></script>
  <script>
    // play/pause video
    let vid = document.getElementById("myVideo");
vid.playbackRate = 0.5; 

    let video = document.querySelector('.video-wrapper video');
    document.getElementById('play-btn').addEventListener('click', () => {
      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    });
  </script>
</body>

</html>