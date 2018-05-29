<!DOCTYPE html><title>moodplaylist.com &#9835;</title><link rel="stylesheet" href="/views/divs/stylesheets/style.css"><link rel="shortcut icon" type="image/x-icon" href="https://s3-us-west-2.amazonaws.com/mood1995/images/favicon.ico">
<html><html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to mood.gg, the site that properly blends music and gaming.">
    <meta name="Farza" content="">



    <!-- Bootstrap Core CSS -->

    <link href="/views/divs/stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <link href="/views/divs/stylesheets/unibox.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/navbar.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/choose-menu.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/divs/javascripts/bootstrap.min.js"></script>
    <script src="/views/divs/javascripts/mobile-detect.js"></script>

</head>

<body>
<div id="mainImg" class="mainImgLoaded"></div>
<div id="mainBody" class="mainBodyLoaded">


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" id="collapseIt" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/home">
                    <img alt="Brand" src="/views/divs/images/logo1.png">
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>


    <!-- Page Content -->
    <div id="content" class="container" style="padding-top: 80px; margin-top:-60px;">
        <div class="row">

            <div class="col-lg-12">
                <div class="logos">
                    </br>
                    <div id="league" class="logoButton">
                        <span class="soonText strokeme"><b>Enter as guest</b></span>
                    </div>
                    </br>
                    <div id="ow" class="logoButton">
                        </br>
                        <span class="soonText strokeme"><b>Login/Register</b></span>
                    </div>
                    </br>
                    <div id="vote" class="logoButton">
                        <img id="question" src="https://s3-us-west-2.amazonaws.com/mood1995/images/donate2.svg">
                        <img id="question" src="https://s3-us-west-2.amazonaws.com/mood1995/images/donate2.svg">
                        <img id="question" src="https://s3-us-west-2.amazonaws.com/mood1995/images/donate2.svg">

                        </br>
                        <span class="soonText2 strokeme"><b>Donate!</b></span>
                    </div>
                </div>
                </br>
                </br>
            </div>
        </div>
    </div>


    <div id="credits" class ="credits">
        <span style="position:relative; top:-0.15vh;"> Like the site? <b>Follow me on my email diaconu.ionut96@gmail.com or <button id="facebook" class="btn btn-primary facebookButton"> <b>Facebook</b> </button>
                for any questions and updates regarding moodplaylist.com </b> </span>

    </div>

</div>

</body>

</html></html><script>var width = 0;


    $(document).ready(function(){
        console.log("Ready...")
        var image = new Image();

        image.onload = function () {
            console.info("Image loaded !");
            document.getElementById('mainImg').style.cssText += "background-image: url('/views/divs/images/mainbackground.jpg'); ;background-repeat: no-repeat; background-position: center; background-size:cover;";
            $('#mainImg').addClass('fadeItIn');
        }

        image.src = '/views/divs/images/mainbackground.jpg'

        $('#mainBody').addClass('fadeItIn');

        $('#twitterBut').click(function() {
            window.open("https://twitter.com/diaconu.ionut96");
        });
        $('#facebook').click(function() {
            window.open("https://www.facebook.com/ionut.diaconu.54");
        });

        $('#league').on({
            mouseenter: function () {
                $('#league').css("background-image", "url(/views/divs/images/dolpin.jpg)");
                $('#league').css("background-position", "30% 33%");
                $('#league').css("background-repeat", "no-repeat");
                $('#league').css("background-size", "100%");
                $('#league').css("border", "1px solid transparent");
                $("body").css("cursor", "pointer");
            },
            mouseleave: function () {
                $('#league').css("background", "rgba(0,0,0,0.4");
                $('#league').css("opacity", "1");
                $('#league').css("border", "1px solid #F8AE4B");
                $("body").css("cursor", "default");

            }
        });

        $('#ow').on({
            mouseenter: function () {
                $('#ow').css("background-image", "url(/views/divs/images/penguin.jpg)");
                $('#ow').css("background-position", "30% 17%");
                $('#league').css("background-repeat", "no-repeat");
                $('#ow').css("background-size", "100%");
                $('#ow').css("border", "1px solid transparent");
                $("body").css("cursor", "pointer");
            },
            mouseleave: function () {
                $('#ow').css("background", "rgba(0,0,0,0.4");
                $('#ow').css("opacity", "1");
                $('#ow').css("border", "1px solid #F8AE4B");
                $("body").css("cursor", "default");
            }
        });


        $('#vote').on({
            mouseenter: function () {
                $('#vote').css("background", "rgba(248,174,75,0.4)");
                $('#vote').css("border", "1px solid transparent");
                $("body").css("cursor", "pointer");
            },
            mouseleave: function () {
                $('#vote').css("background", "rgba(0,0,0,0.4)");

                $('#vote').css("border", "1px solid #F8AE4B");
                $("body").css("cursor", "default");
            }

        });

        $('#league').click(function() {
            window.location.href = "/search";
        });

        $('#ow').click(function() {
            console.log("k")
            window.location.href = "/access";
        });

         $('#vote').click(function() {
	    window.open("https://www.paypal.me/diaconu96");
        });

    });</script>

