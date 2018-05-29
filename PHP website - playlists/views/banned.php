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

    <link href="/views/divs/stylesheets/navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- jQuery -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/divs/javascripts/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
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

                <h1 class="mainHeading" style="color: #F8AE4B;">
                    You are banned !
                    <a href="/home">Go home</a>
                </h1>

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
            document.getElementById('mainImg').style.cssText += "background-image: url('/views/divs/images/seal1.jpg'); ;background-repeat: no-repeat; background-size:cover;";
            $('#mainImg').addClass('fadeItIn');
        }
        image.src = '/views/divs/images/seal1.jpg'
        $('#mainBody').addClass('fadeItIn');
    });
</script>