<?php
include_once('template.php');
spit_template(function () { ?>
    
    <!-- jumbotron -->

    <div class="jumbotron">
        <div class="container text-center">
            <h1>SB Webstore</h1>
            <p>PrestaShop eCommerce</p>
        </div> <!--End container -->
    </div> <!-- End Jumbotron -->
    
    <!-- Services Section -->
    <div class="container">
        <section id=services>
            <div class="page-header" id="feedback">
                <h2>eCommerce Services</h2>
            </div>
            
            <div class="row">
                <div class=col-lg-4>
                    <h4>Support</h4>
                    <p>SB (Small Business) Webstore provides support for small to medium sized business.
                    We can debug and address theme and module issues so that your web site is running smoothly.
                    Our team will meet with you, determine your most pressing needs and fix or update as necessary.
                </div>
                <div class=col-lg-4>
                    <h4>Services</h4>
                    <p>SB Webstore can work with you to go beyond your current theme to a fully customized theme.
                    Our team will work with you to design a theme that meets your specific business needs.
                </div>
                <div class=col-lg-4>
                    <h4>Hosting &amp; Server Administration</h4>
                    <p>We can assist on your current hosting environment or host you on our servers.
                    Let us take care of working through any server issues so you can focus on your business.
                </div>
            </div><!-- End row -->
        </section>
    </div><!-- End Container -->

    <!-- Team Section
    <div class="container">
        <section id=team>
            <div class="page-header" id="feedback">
                <h2>Our Team</h2>
            </div>
            <div class="row">
                <div class=col-lg-4>
                    <h4>Clay</h4>
                    <p>Theme Development
                </div>
                <div class=col-lg-4>
                    <h4>Rogelio</h4>
                    <p>Module Development
                </div>

                <div class=col-lg-4>
                    <h4>Sam</h4>
                    <p>Server Administration
                </div>
            </div>
        </section>
    </div> End Container -->
        
    <!-- call to action -->
    <section id=contact>
        <div class="well">
            <div class="container text-center">
                <h3>Contact Us</h3>
                <p>Enter your name, your email, and a short message</p>
                
                <form class="ajax-mail col-md-8 center-block text-left" style="float:none">
                    <div class="form-group col-sm-6">
                        <label for="full-name">Your Name</label>
                        <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Your Name">
                        <label for="full-name" class=ajax-mail-errors>You must enter your name.</label>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="reply-to">Email address</label>
                        <input type="text" class="form-control" id="reply-to" name="reply-to" placeholder="Enter your Email">
                        <label for="reply-to" class=ajax-mail-errors>Make sure you enter a valid email address!</label>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for=body>Message</label>
                        <textarea class=form-control id=body name=body placeholder="Send us a message..."></textarea>
                        <label for=body class=ajax-mail-errors>Make sure you enter a message.</label>
                    </div>
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary js-button" disabled data-desired-content="Submit">This form requires Javascript</button>
                    </div>
                    <hr>
                    <div class=ajax-mail-result-message></div>
                </form>
            </div> <!-- end container -->
        </div> <!-- end well -->
    </section> <!-- end call to action -->


    
<?php }); ?>
