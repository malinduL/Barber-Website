<?php
$hostname = "localhost";
$un = "root";
$pw = "";
$db = "saloon";
$con = new mysqli($hostname, $un, $pw, $db);
if($con->connect_error){
    echo"faild";
}
if(isset($_POST["submit"])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user(user, password, email) VALUES('$user','$password','$email')";

    if($con->query($sql))
    {
        echo "<script>alert('Record Insert')</script>";
    }
    else
    {
       echo "<script>alert('Record Insert Failed')</script>";
    }
    $con->close();
}
?>
<html>
    <head>
        <title>User Login</title>
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
                <p>Welcome! Successfully Registered!</p>
                <div class="banner-btn">
                    <a href="./login.html" class="linkBtn">Login To Continue</a>
                
                </div>
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