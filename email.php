<!doctype html>
<html lang="en-gb" class="no-js">
<head>

     <!--====== Required meta tags ======-->
      
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="Chaithra Kakunje - Front End Web Developer">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--====== Title ======-->

    <title>Chaithra Kakunje | Front end Web Developer</title>

    <!--====== SEO ======-->

        <meta name="author" content="Chaithra Kakunje">
        <meta name="description" content="Portfolio of Chaithra Kakunje - Front End Web Developer">
        <meta name="keywords" content="chaithra, Kakunje, chaithra Kakunje, front end developer, web design, web development, javascript, html5, css">
        <link rel="canonical" href="https://chaithrakashyap.github.io/">

    <!--====== Bootstrap css ======-->

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chewy" />
    
    <!--====== Style css ======-->

    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
     <!--====== Font Awesome======-->

    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <!-- <link rel="shortcut icon" href="/images/favicon.ico" type="image/ico"> -->

    <!--====== Bootstrap JS ======-->

   
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>

    <!--====== HEADER PART START ======-->

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top logo"><b>Chaithra Kakunje</b></a>
                </div>
                <!--navbar-header start-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#about" class="scroll-link">What I Do</a></li>
                        <li><a href="#skills" class="scroll-link">Skills</a></li>
                        <li><a href="#experience" class="scroll-link">Experience</a></li>
                        <li><a href="#portfolio" class="scroll-link">Portfolio</a></li>
                        <li><a href="#contactUs" class="scroll-link">Contact</a></li>
                    </ul>
                </div>
                <!--navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>

    

    <!--====== HEADER PART ENDS ======-->
    <?php
    $email_to = "chaithra.kashyap01@gmail.com";
    $name = $_POST["name"];
    $email_from = $_POST["email"];
    $message = $_POST["message"];
    $email_subject = "Feedback from CK Portfolio";
    $headers = "From: " . $email_from . "\n";
    $headers .= "Reply-To: " . $email_from . "\n";
    $message = "Name: ". $name . "\r\nMessage: " . $message;
    ini_set("sendmail_from", $email_from);
    $sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
    if ($sent)
    {
    header("Location:thankyou.html");
    } else {
    echo "There has been an error sending your comments. Please try later.";
    }
    ?>
    </body>
    </html>


