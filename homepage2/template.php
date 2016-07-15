<?php

function spit_template($inner) {
?><!DOCTYPE html>
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
                </button>
                <span class="navbar-left"><img src="logo.svg"></span>
                <a href="/" class="navbar-brand">
                    SB Webstore
                </a>
            </div> <!-- end navbar header -->
            
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div> <!-- end Container -->
    </nav> <!-- end Navbar -->

    <?php $inner(); ?>

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
<?php } ?>
