<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ESTRELLA
    </title>
    <!--==============ICON==================================--->
    <link rel="shortcut icon" href="images/est.png">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="indexx.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="index.php" class="logo">
                    <i class='bx bxs-star bx-tada main-color'></i>E<span class="main-color">S</span>TRELLA<i class='bx bxs-movie-play bx-tada main-color'></i>
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <!-- <li><a href="index.php">Home</a></li>
                    <li><a href="genre.php">Genre</a></li>
                    <li><a href="language.php">Language</a></li>-->
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="index.php">ABOUT US</a></li>
                    
                    <?php
                        if(isset($_SESSION['email'])){
                            echo '<li>
                            <a href="logout.php" class="btn btn-hover">
                                <span>LOGOUT</span>
                            </a>
                        </li>';
                        }
                        else{
                            echo '<li>
                            <a href="login.php" class="btn btn-hover">
                                <span>LOGIN</span>
                            </a>
                        </li>';
                        }
                    ?>
                </ul>
                
            </div>
        </div>
    </div>

    <script>
        let menubox = document.getElementById("menubox");
        let menuicon = document.getElementById("menuicon");
        
        menuicon.onclick = function(){
            menubox.classList.toggle("open-menu");

            if(menubox.classList.contains("open-menu")){
                menuicon.src = "images/close.png";
            }
            else{
                menuicon.src = "images/menu.png";
            }
        }
    </script>



    <!-- END NAV -->
    <!-- estrellaaaaa -->
    <section class="estr">
        <div class="tex">
            <a href="home.php" id="title"><h1 class="mainl"><strong>ESTRELLA</strong></h1></a>
            <h2 class="mainb"><strong><span class="main-color">Never Skip The Chance to Entertain Yourself</span></strong></h2>
        </div>
    </section>
   <!-- end of estrellaaaa -->
   <section class="bg-2" >
        <div class="tex2">
            <h1 class="mainl">ESTRELLA</h1>
            <p class="mainb">Estrella Connects The Audience Directly To The Creators</p>
            <p class="mainb">This Can Be Your Perfect destination,If You Are A Film Lover</p>
            <p class="mainb">We Avail You With The Most Entertaining Content</p>
        </div> 
    </section>
    <section class="bg-3" id="bg-3">
        <div class="tex3">
            <h1 class="mainl">EASY PROCESS</h1>
            <p class="mainb">CREATE ACCOUNT</p>
            <p class="mainb" >EXPLORE.&ensp;LIVE.&ensp;ENJOY.</p><br>
            <a href="register.php" class="btn btn-hover"><span>REGISTER</span></a>
        </div>
    </section>
    <section class="bg-4" id="bg-4">
            <div class="tex4">
            <h1 class="mainl">SHOWCASE YOUR TALENT</h1>   
            <p class="mainb">UPLOAD YOUR MOVIE</p><br>
            <a href="upload.php" class="btn btn-hover"><span>UPLOAD</span></a>
        </div>
        
    </section>
    <section class="bg-5" id="bg-5">
        <div class="tex5">
            <p class="mainl"><strong>ENTER THE WORLD OF</p>
            <h1 class="mainb">ESTRELLA</h1>
            <a href="home.php" class="btn btn-hover"><span>ENTER</span></a>
        </div>
    </section>

    <script>
        ScrollReveal({
            reset:true,
            distance:'60px',
            duration:2500,
            delay:24
        });
        ScrollReveal().reveal('.mainl',{delay:24 , origin:'left'})
        ScrollReveal().reveal('.mainb',{delay:24 , origin:'bottom'})
    </script>

        <!-- FOOTER SECTION -->
        <footer class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-md-6 col-sm-12">
                            <div class="content">
                                <a href="#" class="logo">
                                <i class='bx bxs-star bx-tada main-color'></i>E<span class="main-color">S</span>TRELLA<i class='bx bxs-movie-play bx-tada main-color'></i>
                                </a>
                                <p>
                                    Estrella means a Star that Shines over
                                    period lighting up opportunities for independent film-makers around the globe.
                                    This is a platform provided for independent  to share
                                    their work <br>
                                    This platform is going to be the most loved by the
                                    film-makers and viewers, we intend to keep no creative restrictions over the maker’s work
                                    and let our viewers enjoy cinema to its extent. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END FOOTER SECTION -->

            <!-- COPYRIGHT SECTION -->
            <div class="copyright">
                © Copyright TEAM ESTRELLA
            </div>
            <!-- END COPYRIGHT SECTION -->
    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>