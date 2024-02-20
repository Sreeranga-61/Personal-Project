<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/fabb6125dc.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"></a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>
    <section class="header">
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
    </section>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div>
       </div>

    </main>
    <section class="course">
        <h1>Medicine(Humans/Animals)</h1>
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
                    and other medicines.
                </p>
            </div>
            <div class="course-col">
                <h3>General Store</h3>
                <p>These are some general items which are used for baby like shop, sampoo, powder and hair oil are available in different brands
                    and some apple juices are included.<br>
                    the things which are basic requirments to live like brush, paste, moisturising solutions.
                    Overall, general stores play an important role in the retail landscape, offering convenience, community connection, and a sense of nostalgia for many customers.

                </p>
            </div>
        </div>
    </section>

    <section class="campus">
        <h1>choose this store..Because</h1>
        <pa>These are the facilities we have provided According to your covenience</pa>
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
    <!------------------Facilities---------------->

    <section class="facilities">
        <h1>
            Our facilities
        </h1>
        <p>
            Feel Comfort have medicine
        </p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/library.jpg">
                <h3>Comfortable hospital cot</h3>
                <p>  A hospital bed is a bed specially designed for hospitalized patients. These beds have special features both for the comfort and well-being of the patient and for the convenience of health care workers.</p>

            </div>
            <div class="facilities-col">
                <img src="images/basketball.png">
                <h3>Nursing & Worker's</h3>
                <p>  We have Experienced Nursing Department and Well Cleaned Worker's.<br> They takecare of your cleaness over your provided area. They are very friendly and helping people.</p>
                
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png">
                <h3>Rapid COVID Tests</h3>
                <p>  We are providing a Radip COVID test's by a healthcare provider collects a sample from the individual's nasal cavity or throat using a swab. Some tests may allow for self-collection under supervision.
                    and give a Certificate about your tes resuly which is used as proof in any areas. </p>
                
            </div>
        </div>
    </section>

    <!----------testimonials------>

    <section class="testimonials">
        <h1>proprietor's</h1>
        <p>These store established long 40years ago by late Shri Subharangaya Garu and It continued by his son's</p>
        <div class="row">
            <div class="testimonial-col">
                <img src="images/user1.jpg">
                <div>
                    <p>The late shri Subharangaya garu started this store with some basic medicine over 40years ago nad this store gradually created a landmark around 
                        thirty villages for medical emergency after the subharangaya garu passed away his elder son babji take over the charge and continues over 10 years. 
                    </p>
                    <h3>late Shri Subharangaya Garu</h3>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/user2.jpg">
                <div>
                    <p>Mr Krishna Ranga Phani Babu takeover the charge of ownership for last two years after his elder brother late babji till now
                    </p>
                    <h3>KKR Phani Babu</h3>
                </div>
            </div>
        </div>
    
    </section>


<!------Call to action------------>

<section class="cta">
    <h1>
        Contact for any quires regarding our medicine
    </h1>
    <a href="" class="hero-btn">Cantact Us</a>

</section>



<section class="footer">
   <h4>About Us</h4>
   <p>Reach us using below social media</p> 
   <div class="icons">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-linkedin"></i>
   </div>
   <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>

</section>
</body>
</html>