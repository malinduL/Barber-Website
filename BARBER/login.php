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

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($user != "" && $password != ""){
        $sql_query = "select count(*) as cntUser from user where user='".$user."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['user'] = $user;
            header('Location: index1.php');
        }else{
            header('Location: index.html');
            echo "<script>alert('Invalid username or password!')</script>";
        }

    }

}
?>