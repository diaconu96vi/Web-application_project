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
    <link href="/views/divs/stylesheets/choose-menu.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/navbar.css" rel="stylesheet">
    <link href="/views/divs/styles.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/unibox.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- jQuery -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/divs/javascripts/bootstrap.min.js"></script>

</head>
<body>
<!-- links,nav -->
<div id="mainImg" class="mainImgLoaded"></div>
<div id="mainBody" class="mainBodyLoaded" style="overflow:scroll">

    <?php
    require 'divs/moodNavbar.php';
    ?>
    <div id="content" class="container" style="padding-top:100px; margin-top:80px;">
    <div class="row">
    <div class="col-lg-12">
        <div class="form-group" style="padding-top: 20px;">
            <h1 class="mainHeading" style="color: #F8AE4B;"> Register  </h1>
            <form method="POST" action="/register">
                <input name="name" class="form-control" placeholder="Username">
                <input name="PASSWORD" type="password" class="form-control" placeholder="Password">
                <input name="retypePASSWORD" type="password" class="form-control" placeholder="Retype password">
                <input name="email" class="form-control" placeholder="email">
                <button type="submit" class="btn btn-primary" style="margin-left:235px;">Register</button>

            </form>
        </div>
        <!-- Login -->
        <div class="form-group" style="padding-top: 20px;">
            <h1 class="mainHeading" style="color: #F8AE4B;"> Login  </h1>
            <form method="POST" action="/login">
                <input name="name" class="form-control" placeholder="Username">
                <input name="PASSWORD" type="password" class="form-control" placeholder="Password">
                <button type="submit" class="btn btn-primary" style="margin-left:235px;">Login</button>
            </form>
        </div>

        <!-- url thing -->
        <div class="dbusers">
            <?php
                foreach($users1 as $utilizatori)
                {
                    //$utilizatori->changeName("Miica");
                    //$utilizatori->changePass("Parola");
                    echo "<li>Utilizator: $utilizatori->username, Parola: $utilizatori->PASSWORD, Email: $utilizatori->email, Este admin: " .$utilizatori->admin
                        ." Este banat: " . $utilizatori->banned . "</li>";
                }
            ?>
    </div>
    </div>
    </div>
</div>
</body>
</html>
</html></html><script>var width = 0;
    $(document).ready(function(){
        console.log("Ready...")
        var image = new Image();

        image.onload = function () {
            console.info("Image loaded !");
            document.getElementById('mainImg').style.cssText += "background-image: url('/views/divs/images/seal1.jpg'); ;background-repeat: no-repeat; background-size:cover;";
            $('#mainImg').addClass('fadeItIn');
        }
        image.src = '/views/divs/images/seal1.jpg'
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

