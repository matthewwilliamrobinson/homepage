<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <title>Small Business - Start Bootstrap Template</title>
    <meta name="description" content="my app">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link type="text/css" rel=stylesheet href="style.css">

    <style>
        body{
            padding-top: 40px;
        }
    </style>
</head>

<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a href="" class="navbar-brand">SB Webstore</a>
            </div> <!-- end navbar header -->
            
            <div class="collapse navbar-collapse" id="navbar-collapse">
            
            
                <ul class="nav navbar-nav">
                    <li><a href="#Services">Feedback</a></li>
                    <li><a href="#contact">ContactUs</a></li>
                </ul>
            </div>
        </div> <!-- end Container -->
    </nav> <!-- end Navbar -->
    
    <!-- jumbotron -->

    <div class ="jumbotron">
        <div class="container text-center">
            <h1>SB Webstore App</h1>
            <p>PrestaShop eCommerce</p>
        </div> <!--End container -->
    </div> <!-- End Jumbotron -->
    
    <!-- Feedback Section -->
    <div class="container">
        <section>
            <div class="page-header" id="feedback">
                <h2>Services.<small> eCommerce services </small></h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                  <h4>Theme Creation and support</h4>
                  <p>test</p>
                </div>
                <div class="col-lg-4">
                  <h4>Theme Creation and support</h4>
                  <p>test</p>
                </div>
                <div class="col-lg-4">
                  <h4>Theme Creation and support</h4>
                  <p>test</p>
                </div>
            </div><!-- End row -->
        </section>
    </div><!-- End Container -->
        
    <!-- call to action -->
    <section>
        <div class="well">
            <div class="container text-center">
                <h3>Contact Us</h3>
                <p>Enter your name, your email, and a short message</p>
                
                <form action="" class="form-inline ajax-mail">
                    <div class="form-group">
                        <label for="full-name">Subscribe</label>
                        <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Your Name">
                        <label for="full-name" class=ajax-mail-errors>You must enter your name.</label>
                    </div>
                    <div class="form-group">
                        <label for="reply-to">Email address</label>
                        <input type="text" class="form-control" id="reply-to" name="reply-to" placeholder="Enter your Email">
                        <label for="reply-to" class=ajax-mail-errors>Make sure you enter a valid email address!</label>
                    </div>
                    <div class="form-group">
                        <label for=body>Message</label>
                        <textarea class=form-control id=body name=body placeholder="Send us a message..."></textarea>
                        <label for=body class=ajax-mail-errors>Make sure you enter a message.</label>
                    </div>
                    <button type="submit" class="btn btn-default js-button" disabled
                        data-desired-content="Submit">This form requires Javascript</button>
                    <hr>
                    <div class=ajax-mail-result-message></div>
                </form>
            </div> <!-- end container -->
        </div> <!-- end well -->
    </section> <!-- end call to action -->
       

    
    
    <!-- latest jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
    <!-- script for the contact form -->
    <script src="ajaxmail.js"></script>
</body>
</html>
