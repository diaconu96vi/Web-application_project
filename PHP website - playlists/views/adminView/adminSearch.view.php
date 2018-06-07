
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
    <!--
    <link href="/views/divs/stylesheets/styles1.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/views/divs/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/views/divs/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="/views/divs/js/main.js"></script>
    -->



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101656940-1', 'auto');
        ga('send', 'pageview');

    </script>
    <![endif]-->

</head>

<body>
<div id="mainImg" class="mainImgLoaded"></div>
<div id="mainBody" class="mainBodyLoaded" style="overflow:scroll">

    <?php
    require 'views/divs/adminNavbar.php';
    ?>

    <!-- Page Content -->
    <div id="content" class="container" style="padding-top:100px; margin-top:80px;">
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">


                <h1 class="mainHeading">Welcome to moodplaylist.com &#9835; </h1>
                <h1 class="otherHeadings">A site that plays a playlist for the specific mood you are feeling as</h1>
                <h1 class="otherHeadings">Type your mood below to get going! Or click this
                    <?php
                    $random = mt_rand(1,3);
                    if($random == 3){
                        $location = "relaxing";
                    }
                    elseif($random == 2){
                        $location = "driving";
                    }
                    elseif($random == 1){
                        $location = "english";
                    }
                    echo "<a href='/admin/playlist?name2=$location' class='btn btn-primary randomButton'>
                                <img id=\"randomIcon\" src=\"https://image.flaticon.com/icons/svg/25/25344.svg\"/></a>";
                    ?>
                    to go random!</h1>

                <div id="search2">
                    <form method="GET" action="/admin/playlist">
                        <input name="search" class="form-control">
                    </form>
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
        appendToFavoritesBar();

        $("#rightArrow").click( function() {
            event.preventDefault();
            console.log("clicked")
            $('#favoritePlaylists').animate({
                scrollLeft: "+=200px"
            }, "slow");
        });

        $("#leftArrow").click( function() {
            event.preventDefault();
            console.log("clicked")
            $('#favoritePlaylists').animate({
                scrollLeft: "-=200px"
            }, "slow");
        });

        $('#twitterFollowButton').click(function() {
            var link = "https://twitter.com/FarzaTV"
            window.open(link, '_blank');
        });

        /* $('#randomChampion').click(function() {
           var arr = ["relaxing"]
           var playlist = arr[Math.floor(Math.random()*arr.length)];
           console.log(playlist);
           var link = "chooseplaylist?playlistname=" + encodeURIComponent(playlist)
           window.location.href = link;
         });
         */

        $('#collpaseIt').click(function() {
            if(collapsed == false) {
                setTimeout(function(){
                    $('#content').removeClass('fadeItInObject');
                    $('#content').addClass('fadeItOutObject');
                    collapsed = true;
                }, 200);

            }

            else if(collapsed == true) {
                setTimeout(function(){
                    $('#content').removeClass('fadeItOutObject');
                    $('#content').addClass('fadeItInObject');
                    collapsed = false;
                }, 100);
            }

        });

        $('#sub').click(function() {
            window.open("http://eepurl.com/cTENVz")
        });

        $('#twitterBut').click(function() {
            window.open("https://twitter.com/FarzaTV")
        });

        if(md.mobile() != null) {
            $('#credits').css('display', 'none')
        }



    });

    var pageWidth = $("body").width();
    var elementWidth = $("#favoritePlaylists").width();
    var elementLeft = $("#favoritePlaylists").position().left;


    function cleanUpChampName(champName) {
        champName = champName.replace(/\s+/g, '');
        champName = champName.replace("'", '');
        champName = champName.replace(".", '');
        return champName;
    }

    function appendToFavoritesBar() {
        var keyValue = localStorage.getItem("Favorites");

        if(keyValue == null) {
            console.log("Appending");
            var div = document.getElementById('favoritePlaylists').innerHTML;
            document.getElementById('favoritePlaylists').innerHTML = "Your favorites will be shown here, go add some champs!"
            $('#favoritePlaylists').css('line-height', '3vh');

            return;
        }

        var existingEntries = JSON.parse(localStorage.getItem("Favorites"));

        for(var i = 0; i < existingEntries.length; i++) {
            var champ = existingEntries[i];
            var champInLink = encodeURIComponent(champ);
            var link = 'http://www.mood.gg/choosechamp?championname=' + champInLink;
            console.log(champ);
            console.log("LINK ", link);
            var imageLink = "https://s3-us-west-2.amazonaws.com/mood1995/images/champ-icons/" + cleanUpChampName(champ) + ".png"
            $("#favoritePlaylists").append('<a href=' + link + '><img id="favImg"class= "favsImages" src=' + imageLink+ "></img></a>")
            this.width = this.width + 43;
        }

        if(this.width > $(window).width()) {
            $("#rightArrow").css('display', 'block');
            $("#leftArrow").css('display', 'block');
        }
    }</script>