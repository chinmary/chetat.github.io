<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yeku Wilfred C.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
<div class="home">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">YekuWilfred</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars 2x"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-10 text-center">
                <h1 class="intro text-center display-3" style="color: #fff;"></h1>
            </div>
        </div>

    </div>
</div>
<section class="py-5" id="about">
    <div class="container">
        <h2 class="title ">About</h2>
        <div class="row">
            <div class="col-lg-3">
                <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/24991260_1600171453359684_8907844568106843617_n.jpg?oh=a4c14c597fff682f3157db96af32bd3c&oe=5AB68F87"
                     class="img-fluid img-rounded img-thumbnail"/>
            </div>

            <div class="col-lg-6 pt-4">

                <h3>— I am Yeku Wilfred Chetat, a Web and Mobile developer</h3>
                <p>
                    A self-motivated and independent undergraduate ready to put in demonstration the skills I have
                    acquired during my school programs and also to learn and develop new skills that will help me gain
                    experience in the field of software engineering.
                </p>
            </div>
            <div class="col-sm-8 col-lg-3 pt-4">
                <h3 class="">My Skills</h3>

                <h5>Front-End</h5>
                <p>CSS3, JavaScript, AngularJs</p>
                <h5>Back-end</h5>
                <p>Python, NodeJs, PHP, MySQL</p>
                <h5> Mobile Apps </h5>
                <p>Android, IOS</p>
            </div>
        </div>

    </div>
</section>
<section class="py-5" id="portfolio">
    <div class="container">
        <h2 class="title">Portfolio</h2>
        <div class="row">
            <div class="col-md-4 pt-3">
                <a href="http://oc-selection.com" target="_blank"><img
                        src="https://thumbnail.ws/get/thumbnail/?apikey=ab45a17344aa033247137cf2d457fc39ee4e7e16a464&url=oc-selection.com&width=400&mobile=false"
                        class="img-fluid"/></a>
            </div>
            <div class="col-md-4 pt-3">
                <img src="http://via.placeholder.com/350x250" class="img-fluid"/>
            </div>
            <div class="col-md-4  pt-3">
                <img src="http://via.placeholder.com/350x250" class="img-fluid"/>
            </div>
        </div>
    </div>
</section>
<section class="py-5" id="contact">
    <div class="container">
        <h2 class="title">Get In Touch</h2>
        <div class="row">
            <div class="col-md-7">
                <form class="form-horizontal" action="contact.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  id="name" placeholder="Enter name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message"  name="message" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit"  id="cfsubmit"  class="btn btn-primary"><i class="fas fa-paper-plane"></i>&nbsp;Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <p> Have a request or need more info about me or my experience? Just drop a message and I will reply
                    ASAP. </p>

                <h3 class="pt-3">Online Presence</h3>
                <a href="https://twitter.com/yekuwilfred" target="_blank" style="margin: 0 2%;coloR:1DA1F2"> <i
                        class="fab fa-twitter fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/yeku-wilfred-chetat-a6834192/" target="_blank"
                   style="color: #0077B5;margin: 0 2%;"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://github.com/chetat" target="_blank" style="color: black; margin: 0 2%;"> <i
                        class="fab fa-github fa-2x"></i></a>
                <a href="https://www.freecodecamp.org/chetat" target="_blank" style="color: #006400; margin: 0 2%;"><i
                        class="fab fa-free-code-camp fa-2x"></i></a>
                <a href="https://stackoverflow.com/users/7886943/yeku-wilfred" target="_blank"> <i
                        class="fab fa-stack-overflow fa-2x" style="color: #FF9900;margin: 0 2%;
"></i></a>


            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>