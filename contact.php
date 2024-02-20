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
        <h1>Contact Us</h1>

    </section>
    
    
<!---------------contact us-------------->

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d516.188626408913!2d77.87419861996483!3d15.049868362255642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb6a1b12ca81057%3A0x411822fc562ab923!2sVijaya%20Medical%20Stores!5e0!3m2!1sen!2sin!4v1708237522932!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Beside Shivalayam Shreet, Yadiki</h5>
                    <p>Ananthapur Dist.,Andhra Pradesh</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>91-8501030505</h5>
                    <p>6am to 9pm</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span>
                    <h5>sreerangakuntummalla@gmail.com</h5>
                    <pEmailus</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="form-handler.php" method="post">
                <input type="text" name="name" placeholder="Enter your Name" required>
                <input type="email" name="emai" placeholder="Enter your email Address" required>
                <input type="text" name="subject" placeholder="Enter your subject" required>
                <textarea rows="8" name="messge" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn">Send Message</button>
            </form>
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