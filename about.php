<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About QuizLet</title>
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
    body {
        position: relative;
        /* Set the parent container to relative positioning */
        min-height: 100vh !important;
        /* Ensure the parent container takes up at least the full viewport height */
        padding-bottom: 60px;
        /* Provide some space at the bottom for the footer */
        color: black;
        font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
        /* text-align: center; */
        /* img size is 50x50 */
        background: linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, .5)), url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0 !important;
        background- -webkit-animation: bg-scrolling-reverse 0.92s infinite;
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
    }

    .footer {
        position: absolute;
        /* Position the footer element at the bottom of the viewport */
        width: 100%;
        /* Full width */
        height: 60px;
        /* Height of the footer */
        background-color: #f5f5f5;
        /* Grey background */
    }

    .video-container {
        height: 100%;
        width: 100%;
        position: relative;
        padding: 0px;
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

    .dec-img {
        width: 100%;
        height: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }
    .row{
      margin-right: -15px;
      margin-left: 15px;
      background: #a3cffa82;
      padding: 2rem;
      border-radius: 1rem;
      backdrop-filter: blur(1.5px);
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
                    <form class="form-horizontal" name="form" action="sign.php?q=account.php"
                        onSubmit="return validateForm()" method="POST">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="name"></label>
                                <div class="col-md-12">
                                    <input id="name" name="name" placeholder="Enter your name"
                                        class="form-control input-md" type="text">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="gender"></label>
                                <div class="col-md-12">
                                    <select id="gender" name="gender" placeholder="Enter your gender"
                                        class="form-control input-md">
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
                                    <input id="email" name="email" placeholder="Enter your email-id"
                                        class="form-control input-md" type="email">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="mob"></label>
                                <div class="col-md-12">
                                    <input id="mob" name="mob" placeholder="Enter your mobile number"
                                        class="form-control input-md" type="number">

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
}?>
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
            <source src="./dynamic-assets/background.mp4" type="video/mp4" />
        </video>
        <div class="container caption" style="backdrop-filter: blur(5px);">
            <div class="header-title">
                <h1 style="font-size: 6.8rem;">About Team and Project </h1>
                <p style="font-size: 1.8rem;"> <span class="logo"> Quizlet </span> is a free online learning platform
                    that helps students learn and memorize information in a fun and engaging way. The website offers a
                    variety of study tools
                    and test your abilities and learn new concepts</p>
                <br>
                <hr><br>
                <p>
                    <i>sQUAD took a student-centered approach, recognizing the difficulties that both educators and
                        students face. They are developing QuizLet to create an easy-to-use, efficient, and empowering
                        platform for users to gain confidence and test their skills.</i>
                </p>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- about section -->
    <section id="about" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title" style="font-size: 2.2rem;">know more about</span>
                <h2 class="lg-title" style="font-size: 4.8rem;">Team sQUAD</h2>
            </div>

            <div class="about-row">
                <br>
                <hr><br>
                <div class="row">
                    <div class="col-md-4">
                        <img src="image/nikhil.jpg" class="dec-img" alt="about img">
                    </div>
                    <div class="col-md-6">
                        <h2>Nikhil Tiwari</h2>
                        <p class="text">Hi, my name is Nikhil Tiwari, and I'm the team leader of SQUAD, the group of
                            four people who created Quizlet.</p>
                        <p class="text">The development of Quizlet was a challenging process. I had to learn a lot about
                            PHP and MySQL, about database in general and I faced a lot of technical obstacles. <br> I
                            was about to give up on the project several times, but my group members and teachers
                            encouraged me to keep going.
                            <br /><br />
                            I'm really happy with overall utcome. I'm hoping that other students will find it helpful as
                            well.
                        </p>
                    </div>
                </div>

                <br>
                <hr><br>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Meghana Tamrakaar</h2>
                        <p class="text">Hi, my name is Meghana and I'm a final year UG student studying computer
                            science. I'm passionate about web development and I recently used HTML, CSS, and Bootstrap
                            to design the UI of the Quizlet website.</p>
                        <p class="text">I'm really happy with how the UI turned out and I think it makes Quizlet even
                            more enjoyable to use. I'm hoping that other students will find it helpful as well.
                            <br /></br>
                            If you're interested in learning more about how I designed the UI, I'm happy to share my
                            code and explain my thought process. Feel free to share your thoughts about UI in feedback
                            section.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="image/dev.jpeg" class="pull-right" class="dec-img" alt="about img">
                    </div>
                </div>

                <br>
                <hr><br>
                <div class="row">
                    <div class="col-md-4">
                        <img src="image/dev.jpeg" class="dec-img" alt="about img">
                    </div>
                    <div class="col-md-6">
                        <h2>Priyamvada Singh</h2>
                        <p class="text">Hi, I'm Priyamvada Singh, a final year UG student at APS University. I'm one of
                            the contributors to the Quizlet project, and I'm responsible for making and maintaining the
                            documentation of the project.</p>
                        <p class="text">I also coordinate with team sQUAD to ensure that the project is on track and
                            that we're meeting our deadlines.
                            <br /></br>
                            I'm grateful for the opportunity to work on the Quizlet project, and I'm learning a lot
                            about software development and project management. I'm also making great friends, and I'm
                            having a lot of fun. I'm excited to see what the future holds for Quizlet, and I'm confident
                            that it will be a success.
                        </p>
                    </div>
                </div>

                <br>
                <hr><br>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Dhruv Pandey</h2>
                        <p class="text">I'm Dhruv Pandey, IDK why people call me it'sDhruva 🤔.
                            <br /><br /> Anyways, I'm part of the team that created Quizlet, and I'm responsible for
                            gathering quiz questions from a variety of sources, including books, the internet, and
                            encyclopedias.
                        </p>
                        <p class="text"> I also coordinate with the rest of the team to ensure that Quizlet is a
                            high-quality learning tool.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="image/dev.jpeg" class="pull-right" class="dec-img" alt="about img">
                    </div>
                </div>
            </div>
    </section>
    <!-- end of about section -->


    <!--Footer start-->
    <div class="row footer">
        <div class="col-md-3 box">
            <a href="./about.php" target="_blank">About us</a>
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
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:#0c3966">Developers</span>
                    </h4>
                    <a href="./about.php" class="label label-primary pull-left" style="font-size:3rem;"
                        title="Team Name : ">sQUAD
                    </a>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p class="lead"
                                style="font-family:'typo';width: 90%;margin: 3rem auto;text-align: justify;">
                                <img src="image/dev.jpeg" alt="TEAM sQUAD"
                                    style="max-width: 17rem;height: 18rem;margin-left: 0px;margin:1.5rem; margin-left: 0px;"
                                    class="img-rounded pull-left">

                                sQUAD is a energetic group of four people devoted to learning and sharing their
                                knowledge
                                through hands-on involvement in projects. Their excitement drives them to handle
                                challenges and
                                make inventive arrangements utilizing their mastery. <br><br>
                                With focus on building web projects, sQUAD points
                                to provide unique and effective answers to real-world issues. Their collaborative
                                approach and
                                commitment to consistent development make them a dynamic force within the field of web
                                improvement.
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