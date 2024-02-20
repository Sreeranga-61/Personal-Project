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
        <h1>Our Most Experienced proprietor</h1>

    </section>

    <!----------blog page canots------------>

    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/certificate.jpg">
                <h2>
                    proprietor Vision..
                </h2>
                <p>
                    Medical stores in villages serve a critical role in providing access to essential medications, healthcare products, and sometimes basic medical services to rural communities. Here are some key aspects of medical stores in villages:

Accessibility: Medical stores in villages are often the primary source of medications and healthcare products for residents who <br>may not have easy access to larger pharmacies or healthcare facilities. They are typically located within or near the village center for easy accessibility.

Product Range: While the range of products may be more limited compared to pharmacies in urban areas, village medical stores typically<br> stock essential medications, first-aid supplies, over-the-counter drugs, basic medical equipment (such as thermometers and blood pressure monitors), and hygiene products.

Qualified Staff: Depending on the regulations in the region,<br> some village medical stores may have qualified pharmacists or healthcare professionals who can provide advice on medication use, dosage instructions, and minor health concerns. In other cases, the staff may have basic training in dispensing medications.

Community Health Services: In some cases, village medical stores<br> may also offer basic healthcare services such as blood pressure monitoring, wound dressing, and administering basic vaccinations. These services help meet the primary healthcare needs of the community.

Role in Health Education: Village medical stores can also play a role<br> in health education by providing information on preventive health measures, sanitation, nutrition, and the proper use of medications. This can help raise awareness and promote healthier lifestyles within the community.

Supply Challenges: Village medical stores may face challenges in <br>maintaining adequate stock due to limited transportation infrastructure, supply chain disruptions, or seasonal fluctuations in demand. Ensuring consistent availability of essential medications can be a significant challenge in rural areas.

Community Support: Village medical stores often enjoy strong community<br> support and trust, as they are seen as vital resources for maintaining the health and well-being of the community. Residents may rely on these stores for both acute and chronic healthcare needs.

Overall, medical stores in villages play a crucial role in bridging the healthcare gap in rural areas, providing essential medications, healthcare products, and sometimes basic medical services to residents who may not have access to larger healthcare facilities. They contribute significantly to the overall health and well-being of rural communities.
                </p>


                <div class="comment-box">
                    <h3>
                        leave a comment
                    </h3>
                    <form class="Comment-form">
                        <input type="text" placeholder="Enter name">
                        <input type="email" placeholder="Enter Email">
                        <textarea rows="5" placeholder="Your Comment">
                        </textarea>
                        <button type="submit" class="hero-btn red-btn">POst Comment</button>
                    </form>
                </div>
            </div> 
            <div class="blog-right">
                <h3>Customer Data</h3>
                <div>
                    <span>Villages</span>
                    <snap>30</snap>
                </div>
                <div>
                    <span>Doctoc's</span>
                    <snap>2</snap>
                </div>
                <div>
                    <span>Veternary customers</span>
                    <snap>194</snap>
                </div>
                <div>
                    <span>Veternary Doctor's</span>
                    <snap>4</snap>
                </div>
                <div>
                    <span>Nurse's</span>
                    <snap>4</snap>
                </div>
                <div>
                    <span>staff</span>
                    <snap>12</snap>
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