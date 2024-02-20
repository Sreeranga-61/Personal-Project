<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/fabb6125dc.js" crossorigin="anonymous"></script>
    <title>Home</title>
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
        <h1>About Us</h1>

    </section>
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Kuntumalla's Vijaya Medicals</h1>
                <p>Kuntumalla family is the ownership of this property this is the oldest store in that area and having large amount of respect around people.
                    Having good history amoung helping other and giving Doanations to Homeless people and also Animals like dogs are treated by cost-free.
                </p>
                <a src="" class="hero-btn red-btn">EXPLORE NOW</a>
                
            </div>
            <div class="about-col">
                <img src="images/about.jpg">
            </div>
        </div>
    </section>
    
    


<section class="footer">
   <h4>About Us</h4>
   <p>Contact for any quires regarding our medicine </p> 
   <div class="icons">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-linkedin"></i>
   </div>
   <p>Made with <i class="fa fa-heart-o"></i> by Sreeranga Kuntumallas</p>

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