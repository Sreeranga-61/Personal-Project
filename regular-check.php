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

</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hindMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">INFORMATION</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class="text-box">
        <p>Book a Checkup According to convenience </p>
    </div>
    
    </section>


    <section class="check">
        <h1>Book a Regular Check-up</h1>
        <p>Regular check-up gives a reason whatever you want at meals</p>

<!---------form---------------->
            <form id="form">
 

                <div class="form-control">
                    <label for="name" id="label-name">
                        Full Name
                    </label>
         
                    
                    <input type="text" id="name"
                           placeholder="Enter your full name" required />
                </div>
         
                <div class="form-control">
                    <label for="email" id="label-email">
                        Email
                    </label>
         
                    
                    <input type="email" id="email"
                           placeholder="Enter your email" required/>
                </div>
         
                <div class="form-control">
                    <label for="age" id="label-age">
                        Age
                    </label>
         
                   
                    <input type="text" id="age"
                           placeholder="Enter your age" required/>
                </div>
         
                <div class="form-control">
                    <label for="role" id="label-role">
                        Which time you would like prefer?
                    </label>
         
                    
                    <select name="role" id="role" required>
                        <option value="Select">Select</option>
                        <option value="9am-11am">9am-11am</option>
                        <option value="6pm-8pm">6pm-8pm</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="radio" id="label-radio">
                        Gender
                    </label>
         
                    
                    <select name="radio" id="radio" required>
                        <option value="Select">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Trans">Trans</option>
                    </select>
                </div>
         
                <div class="form-control">
                    <label>
                        Any specifications-
                    </label>
        
                </div>
         
                <div class="form-control">
                    
                    
                    <textarea name="comment" id="comment"
                              placeholder="Enter your comment here">
                    </textarea>
                </div>
         
                
                <button type="submit" class="hero-btn" value="submit">
                    Submit
                </button>
            </form>
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