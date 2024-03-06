<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "saloon"; /* Database name */
$con = new mysqli($host, $user, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check user login or not
if(!isset($_SESSION['user'])){
    header('Location: index1.php');
}

// logout
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.html');
}
?>
<html>
    <head>
        <title>Barber Shop</title>
        <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="htpps://fonts.googleapis.com/css?family=Kaushan+Script|Poppin&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>
    
    <body>
        <section id="banner">
            <img src="images/logo.png" class="logo"> 
            <div class="banner-text">
                <h1>Hair Studio</h1>
                <p>Style Your Hair Is Your Life</p>
                <div class="banner-btn">
                    <a href="#"><span></span>Find Out</a>
                    <a href="#"><span></span>Read More</a>
                
                </div>
            
            </div>
        
        
        </section>
        
        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="#banner">HOME</a></li>
                     <li><a href="#feature">FEATURES</a></li>
                     <li><a href="#service">SERVICES</a></li>
                     <li><a href="#testimonial">TESTIMONTALS</a></li>
                    <li><a href="#footer">MEET US </a></li>
                    <li><a href="./login.html">LOGIN / SIGN UP</a></li>
                    <li><a href="index.html" name="logout">LOGOUT</a></li>
                    
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="images/menu.png" id="menu">
        
        </div>
        
        <!--Features-->
        
        <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
            
        </div>
        
        <div class="feature-box">
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>Donec eget ultricies sapi. Sed porttitor, mauris ater lob facilisis, elit sapie elefend ligula.</p>
                    </div>
                </div>
                
                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>Donec eget ultricies sapi. Sed porttitor, mauris ater lob facilisis, elit sapie elefend ligula.</p>
                    </div>
                </div>
                
                 <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p>Donec eget ultricies sapi. Sed porttitor, mauris ater lob facilisis, elit sapie elefend ligula.</p>
                    </div>
                </div>
                     
            </div>
            <div class="features-img">
                <img src="images/barber-man.jpg">
            </div>
        </div>>
        
        </section>
        
        <!--Service-->
        
        <section id="service">
         <div class="title-text">
            <p>SERVICES</p>
            <h1>We Provide Better</h1>
         </div>
               <div class="service-box">
                <div class ="single-service">
                    <img src ="images/pic-1.jpg">
                    <div class="overlay"></div>
                <div class="service-desc">
                  <h3>Hair Styling</h3>
                    <hr>
                    <p>this is test under description of barber foundation 
                    this is test under description of barber foundation.</p>
                </div>
                </div>
               <div class ="single-service">
                    <img src ="images/pic-2.jpg">
                    <div class="overlay"></div>
                 <div class="service-desc">
                  <h3>Beard Trim</h3>
                    <hr>
                    <p>this is test under description of barber foundation 
                    this is test under description of barber foundation.</p>
                </div>
                </div>
               <div class ="single-service">
                    <img src ="images/pic-3.jpg">
                    <div class="overlay"></div>
                 <div class="service-desc">
                  <h3>Hair Cut</h3>
                    <hr>
                    <p>this is test under description of barber foundation 
                    this is test under description of barber foundation.</p>
                </div>
                </div>
               <div class ="single-service">
                    <img src ="images/pic-4.jpg">
                    <div class="overlay"></div>
                <div class="service-desc">
                  <h3>Dry Shapoo</h3>
                    <hr>
                    <p>this is test under description of barber foundation 
                    this is test under description of barber foundation.</p>
                </div>
                </div>
        </div>
      
        </section>
        
        <!--Testimonial-->
        <section id="testimonial">
           <div class="title-text">
            <p>TESTIMONIAL</p>
            <h1>What Client Says</h1>
         </div> 
            <div class="testimonial-row">
            <div class="testimonial-col">
            <div class="user">
                <img src="images/img-1.jpg">
                <div class="user-info">
                    <h4>ASHAN NILANGA <i class="fa fa-twitter"></i></h4>
                    <small>@ashannilanga</small>
                </div>
                </div>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ut quas, perspiciatis totam eum facere saepe, quis voluptatem non? Pariatur, porro, laudantium corrupti aliquam rerum libero quia aliquid explicabo maiores.</p>  
                </div>
            <div class="testimonial-col">
                <div class="user">
                <img src="images/img-2.jpg">
                <div class="user-info">
                    <h4>SACHINI LIYANAGE<i class="fa fa-twitter"></i></h4>
                    <small>@sachiniliyanage</small>
                </div>
                </div>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ut quas, perspiciatis totam eum facere saepe, quis voluptatem non.</p>  
                </div>
            <div class="testimonial-col">
                <div class="user">
                <img src="images/img-3.jpg">
                <div class="user-info">
                    <h4>CHAMOD JAY <i class="fa fa-twitter"></i></h4>
                    <small>@chamodjay</small>
                </div>
                </div>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ut quas, perspiciatis totam eum facere saepe, quis voluptatem non? Pariatur, porro, laudantium corrupti aliquam rerum libero quia aliquid explicabo maiores.</p>  
                </div>
            
            </div>
            
        </section>
        
        <!--footer-->
        <section id="footer">
            <img src ="images/footer-img.png" class="footer-img">
            <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Shop Today</h1>
         </div>
          <div class="footer-row">
          <div class="footer-left">
              <h1>Opening Hours</h1>
              <p><i class="fa fa-clock-o"></i> Monday to Friday - 9am to 9pm</p>
              <p><i class="fa fa-clock-o"></i> Saturaday and Sunday - 8am to 11pm</p>
              </div>
          <div class="footer-right">
             <h1>Get In Touch</h1>
              <p>NO-55/A,Matara Bus Stand,Matara <i class="fa fa-map-marker"></i></p>
              <p>saloonomeela@gmail.com <i class="fa fa-paper-plane"></i></p>
              <p>www.Saloonomeela.com <i class="fa fa-search"></i></p>
              <p>+94 70 3454322 <i class="fa fa-phone"></i></p>
              </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>Saloon Omeela Pvt Ltd </p>
        </div>
        </section>
        
        
        <script>
            var menuBtn = document.getElementById("menuBtn")
            var sideNav = document.getElementById("sideNav")
            var menu = document.getElementById("menu")
            
            sideNav.style.right = "-250px";
            
            menuBtn.onclick = function(){
                if(sideNav.style.right == "-250px"){
                    sideNav.style.right = "0";
                    menu.src = "images/close.png";
                }
                else{
                    sideNav.style.right = "-250px";
                    menu.src = "images/menu.png";
                } 
            }
var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 500,
	speedAsDuration: true
});
        </script>
    </body>
</html>