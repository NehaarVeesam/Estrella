<?php
session_start();
?>
<?php
@include 'config.php';
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $pass = $_POST['password'];

   $select = " SELECT * FROM login WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
   $t = mysqli_num_rows($result);
   if($t == 1)
   {
    $_SESSION['email'] = $email;
    header('location:home.php');
   }
   else{
    echo '<script>alert("LOGIN FAILED , PLEASE TRY AGAIN")</script>';
   }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/est.png">
    <link rel="stylesheet" href="anm.css" class="css">
    <title>LOGIN</title>
</head>
<body>
    <form action="" method="POST">
    <div class="box">
        <div class="form">
            <h1>LOGIN</h1>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>ENTER YOUR EMAIL</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>ENTER YOUR PASSWORD</span>
                <i></i>
            </div>
            <input type="submit" name="submit" value="LOGIN" class="form-btn">
            <div class="links-r">
                <p>Don't have an account? <a href="register.php">SIGN UP</a></p>
            </div>
        </div>
    </div>
    </form>
    
</body>
</html>