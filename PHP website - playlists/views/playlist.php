
<!DOCTYPE html><title>moodplaylist.com &#9835;</title><link rel="stylesheet" href="/stylesheets/style.css"><link rel="shortcut icon" type="image/x-icon" href="https://s3-us-west-2.amazonaws.com/mood1995/images/favicon.ico"><html><html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Diaconu Ionut" content="">

    <title>moodplaylist</title>

    <!-- Bootstrap Core CSS -->
    <link href="/views/divs/stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/views/divs/stylesheets/contact.css" rel="stylesheet">

    <link href="/views/divs/stylesheets/navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        #playlist{
            list-style: none;
        }
        #playlist li a{
            text-decoration: none;
        }
        #playlist .current-song a{
            color:blue;
        }
    </style>

    <!-- jQuery -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/divs/javascripts/bootstrap.min.js"></script>

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
<div id="mainBody" class="mainBodyLoaded">
    <?php
    require 'divs/moodNavbar.php';
    ?>

    <!-- Page Content -->
    <div class="container" style="padding-top: 100px; margin-top:-50px;">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                if(!empty($_GET['name'])) {
                    $playlist = $_GET['name'];
                }
                if(!empty($_GET['search'])){
                    $playlist = $_GET['search'];

                    if($playlist != "relaxing" && $playlist != "driving" && $playlist != "english"){
                        header("location: /search");
                    }
                }
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=test1", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT playlist,song, author, title, likes FROM playlists");
                    $stmt->execute();

                    // set the resulting array to associative
                    $playlist1 = $stmt->fetchAll(PDO::FETCH_CLASS);
                    echo "<h1 class='mainHeading' style='color: #F8AE4B;'> $playlist - mood  </h1>";

                }
                catch(PDOException $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }
                ?>
                <div class="container" style="color: white; border: solid lightcoral">
                <audio src="" controls id="audioPlayer">
                    Sorry, your browser doesn't support html5!
                </audio>


                    <ul id="playlist">
                        <?php
                        foreach($playlist1 as $playlist2){
                            if($playlist2->playlist == $playlist)
                            {
                                echo "<li><a href='/views/divs/data/$playlist2->song'> $playlist2->author - $playlist2->title";
                            }

                        }
                        ?>
                    </ul>
                </div>
                <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
                <script src="/views/divs/js/audioPlayer.js"></script>
                <script>
                    // loads the audio player
                    audioPlayer();
                </script>

            </div>


        </div>
    </div>
</div>
</body>

</html></html><script>var width = 0;
    $(document).ready(function(){
        console.log("Ready...")
        var image = new Image();

        image.onload = function () {
            console.info("Image loaded !");
            document.getElementById('mainImg').style.cssText += "background-image: url('/views/divs/images/waterfall.jpg'); ;background-repeat: no-repeat; background-size:cover;";
            $('#mainImg').addClass('fadeItIn');
        }
        image.src = '/views/divs/images/waterfall.jpg'
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
    });

    $('#twitterFollowButton').click(function() {
        var link = "https://twitter.com/FarzaTV"
        window.open(link, '_blank');
    });

    var pageWidth = $("body").width();
    var elementWidth = $("#favoritePlaylists").width();
    var elementLeft = $("#favoritePlaylists").position().left;


    function cleanUpChampName(champName) {
        champName = champName.replace(/\s+/g, '');
        champName = champName.replace("'", '');
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