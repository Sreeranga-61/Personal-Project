<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, intial-scale=1.0">
    <title>Vijaya Medicals General Store</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<script src="https://kit.fontawesome.com/fabb6125dc.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hindMenu()"></i>
                <ul>
                <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">INFORMATION</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Service Information</h1>

    </section>
    




    <section class="course">
        <h1>Services we are provide</h1>
        <p>
            10% Discount for Regular customers
        </p>
        <div class="row">
            <div class="course-col">
                <h3>Human begin</h3>
                <p>These are available without a prescription and are typically used to treat minor ailments like headaches, colds, allergies, and pain
                    and also These are medications that can only be obtained with a prescription from a licensed healthcare provider. They are used to treat more serious or chronic conditions and require medical supervision due to their potential side effects or interactions
</p>
            </div>
            <div class="course-col">
                <h3>Animals</h3>
                <p>We have antibiotics are used in veterinary medicine to treat bacterial infections in animals. They may be administered orally, topically, or through injections.
                    and we have parasiticides These medications are used to treat and prevent infestations of parasites such as fleas, ticks, worms, mites, and lice in animals. They come in various forms, including spot-on treatments, oral medications, and collars
                    and other medicines.</p>
            </div>
            <div class="course-col">
                <h3>General Store</h3>
                <pThese are some general items which are used for baby like shop, sampoo, powder and hair oil are available in different brands
                and some apple juices are included.<br>
                the things which are basic requirments to live like brush, paste, moisturising solutions.
                Overall, general stores play an important role in the retail landscape, offering convenience, community connection, and a sense of nostalgia for many customers.</p>
            </div>
        </div>
    </section>



    <!----------facilities---------->

    <section class="facilities">
        <h1>
            Our facilities
        </h1>
        <p>
            Feel Comfort have medicine
        </p>

        <div class="row">
        <div class="row">
            <div class="campus-col">
                <a href="regular-check.php"><img src="images/london.png">
                <div class="layer">
                    <h3>Regular Checkup</h3>
                </div>
            </div>
            <div class="campus-col">
                <a href="https://api.whatsapp.com/send?phone=8501030505&text=Share%20about%20your%20health%20condition" target="_blank"><img src="images/newyork.png">
                <div class="layer">
                    <h3>Online Adviser</h3>
                </div>
            </div>
            <div class="campus-col">
                <a href="https://youtube.com/@Healthbestieyoutuber?si=SdAFovLdkQbsqAmj"><img src="images/washington.png">
                <div class="layer">
                    <h3>Doctor's lecture</h3>
                </div>
            </div>
        </div>
    </section>
    


<section class="footer">
   <h4>About Us</h4>
   <p>Contact for any quires regarding our medicine</p> 
   <div class="icons">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-linkedin"></i>
   </div>
   <p>Made with <i class="fa fa-heart-o"></i> by Sreeranga Kuntumalla</p>

</section>

<!------------about us conytent------>




















<!--------JavaScript for Toggle Menu------------>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hindMenu(){
            navLinks.style.right = "-200";
        }
    </script>
</body>
</html>