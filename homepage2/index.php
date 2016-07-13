<?php
include_once('template.php');

spit_template(function () { ?>
    
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
                <div class=col-lg-4>
                    <h4>Theme</h4>
                    <p>Provides a Professional & Approachable website theme that
                    even a novice could easily pick up and use. The website uses
                    a INSERTCOLOR color palette and a FONTSTYLE font that makes
                    the site visually appealing and highly accessible.
                    Simplicity & Beauty are just some of this theme's defining
                    characteristics.
                </div>

                <div class=col-lg-4>
                    <h4>Module</h4>
                    <p>A highly reliable and secure payment module that utilizes
                    PAYMENTSYSTEM (PayPal?) which allows for a simple and
                    efficient payment process. 
                </div>

                <div class=col-lg-4>
                    <h4>Hosting &amp; Server Administration</h4>
                    <p>Once you have purchased our server, you will be in
                    possession of a highly reliable service hosting. This
                    capability will provide you with an efficient server which
                    will enable your small business to reach it's full
                    potential. If anything is to ever go wrong our professional
                    staff will be available to contact at: (123-456-7890)
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
       
<?php }); ?>
