
<!DOCTYPE html><title>moodplaylist.com &#9835;</title><link rel="stylesheet" href="/views/divs/stylesheets/style.css"><link rel="shortcut icon" type="image/x-icon" href="https://s3-us-west-2.amazonaws.com/mood1995/images/favicon.ico">
<html><html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Diaconu Ionut" content="">

    <title>moodplaylist.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="/views/divs/stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="/views/divs/stylesheets/full.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/unibox.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/navbar.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/champ-navbar.css" rel="stylesheet">
    <link rel="icon" href="/views/divs/images/favicon.ico"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/divs/javascripts/bootstrap.min.js"></script>
    <script id="search" type="application/javascript" src="/views/divs/javascripts/unibox.js"></script>
    <script src="/views/divs/javascripts/home-page.js"></script>
    <script src="/views/divs/javascripts/mobile-detect.js"></script>
</head>

<body>
<div id="mainImg" class="mainImgLoaded"></div>
<div id="mainBody" class="mainBodyLoaded">

    <?php
        require 'views/divs/userNavbar.php';
    ?>

    <!-- Page Content -->
    <div id="content" class="container" style="padding-top:100px; margin-top:80px;">
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1 class="mainHeading">Welcome to moodplaylist.com &#9835; </h1>
                <h1 class="otherHeadings">A site that plays a playlist for the specific mood you are feeling as</h1>
                <h1 class="otherHeadings">Type your mood below to get going! Or click this <button id="randomPlaylist" class="btn btn-primary randomButton"><img id="randomIcon" src="https://image.flaticon.com/icons/svg/25/25344.svg"/></button> to go random!</h1>

                <div id="search2">
                    <input class="form-control" id="searchBox" style="text-align:center;">
                </div>

                </br>
                </br>
            </div>
        </div>
    </div>


    <div id="credits" class ="credits">
        <span style="position:relative; top:-0.15vh;"> Like the site? <b>Follow me on my email diaconu.ionut96@gmail.com for any questions and updates regarding moodplaylist.com </b> </span>

    </div>

    <span id="rightArrow" class="glyphicon glyphicon-circle-arrow-right favArrowsRight"></span>
    <span id="leftArrow" class="glyphicon glyphicon-circle-arrow-left favArrowsLeft"></span>

</div>
</body>

</html></html><script>console.log(Object.keys(localStorage))
    console.log(location.hostname);
    var width = 0;
    var collapsed = false;

    var md = new MobileDetect(window.navigator.userAgent);
    console.log("Phone: " + md.mobile());


    $(document).ready(function(){
        console.log("Ready...")
        var image = new Image();

        image.onload = function () {
            console.info("Image loaded !");
            document.getElementById('mainImg').style.cssText += "background-image: url('http://i.stack.imgur.com/r5CAq.jpg'); ;background-repeat: no-repeat; ;background-size: cover;";
            $('#mainImg').addClass('fadeItIn');
        }
        image.src = 'http://i.stack.imgur.com/r5CAq.jpg'

        $('#mainBody').addClass('fadeItIn');
        });</script>