
<!DOCTYPE html><title>moodplaylist.com &#9835;</title><link rel="stylesheet" href="/views/divs/stylesheets/style.css"><link rel="shortcut icon" type="image/x-icon" href="https://s3-us-west-2.amazonaws.com/mood1995/images/favicon.ico"><html><html lang="en">
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
    <link href="/views/divs/styles.css" rel="stylesheet">
    <link href="/views/divs/stylesheets/navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- jQuery -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/divs/javascripts/bootstrap.min.js"></script>

</head>

<body>
<div id="mainImg" class="mainImgLoaded"></div>
<div id="mainBody" class="mainBodyLoaded" style="overflow:scroll">

    <?php
    require 'views/divs/adminNavbar.php';
    ?>

    <!-- Page Content -->
    <div class="container" style="padding-top: 100px; margin-top:-50px;">
        <div class="row">
            <div class="col-lg-12">
                <!-- For pc -->
                <div id="onPC" class="form-group" style="padding-top: 20px;" >
                    <!-- Banning panel -->
                    <h1 class="mainHeading" style="color: #F8AE4B;"> Banning panel </h1>
                    <ul class="list-group">
                        <form method="POST" action="/ban">
                            <input name="name" class="form-control" placeholder="Username">
                            <button type="submit" class="btn btn-primary" style="margin-left:235px;"> Ban user</button>
                        </form>
                        <form method="POST" action="/unban">
                            <input name="name1" class="form-control" placeholder="Username">
                            <button type="submit" class="btn btn-primary" style="margin-left:235px;"> Unban user</button>
                        </form>
                    </ul>

                    <!-- Create user panel -->
                    <h1 class="mainHeading" style="color: #F8AE4B;"> Create user </h1>
                    <ul class="list-group">
                        <form method="POST" action="/create">
                            <input name="name" class="form-control" placeholder="Username">
                            <input name="PASSWORD" class="form-control" type="password" placeholder="Password">
                            <input name="retypePASSWORD" class="form-control" type="password" placeholder="Retype password">
                            <input name="email" class="form-control" placeholder="Email">
                            <button type="submit" class="btn btn-primary" style="margin-left:235px;"> Create </button>

                        </form>
                    </ul>

                    <!-- Edit uesr panel -->
                    <h1 class="mainHeading" style="color: #F8AE4B;"> Edit user </h1>
                    <ul class="list-group">
                        <form method="POST" action="/edit">
                            <input name="user" class="form-control"placeholder="Username to edit">
                            <input name="name1" class="form-control" placeholder="Username">
                            <input name="PASSWORD" class="form-control" type="password" placeholder="Password">
                            <input name="email" class="form-control" placeholder="Email">
                            <button type="submit" class="btn btn-primary" style="margin-left:235px;"> Modify</button>
                        </form>
                    </ul>
                </div>
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#userTable">Users table</button>
                <div id="userTable" class="collapse">
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
    </div>
</div>
</body>

</html></html><script>var width = 0;
    $(document).ready(function(){
        console.log("Ready...")
        var image = new Image();

        image.onload = function () {
            console.info("Image loaded !");
            document.getElementById('mainImg').style.cssText += "background-image: url('/views/divs/images/blackwhitestone.jpg'); ;background-repeat: no-repeat; background-size:cover;";
            $('#mainImg').addClass('fadeItIn');
        }
        image.src = '/views/divs/images/blackwhitestone.jpg'
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

    if(this.width > $(window).width()) {
        $("#rightArrow").css('display', 'block');
        $("#leftArrow").css('display', 'block');
    }
    var md = new MobileDetect(window.navigator.userAgent);
    if(md.mobile() != null) {
        $('#onPC').css('display', 'none')
    }
    else{
        $('#onMobile').css('display', 'none')
    }</script>



