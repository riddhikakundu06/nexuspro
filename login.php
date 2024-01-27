<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/styleSign.css">
    <script src="https://kit.fontawesome.com/437c001710.js" crossorigin="anonymous"></script>
</head>
<body>

<div id="grad">
        <div class="form-box">
        <?php
      include("php/config.php");
      if(isset($_POST['SignIn'])){
        $Email= mysqli_real_escape_string($con,$_POST['Email']);
        $Password= mysqli_real_escape_string($con,$_POST['Password']);

        $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$Email' AND Password='$Password' ") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['Phone'] = $row['Phone'];
            $_SESSION['Id'] = $row['Id'];
        }else{
            echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Go Back</button>";
 
        }
        if(isset($_SESSION['valid'])){
            header("Location: home.php");
        }
      }else{
      
      ?>
            <h1 id="title">Sign In</h1>
            <form id="signInForm" action="login.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="Password" placeholder="Enter your password" required>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <div class="btn-field">
                        <button type="submit"  name="SignIn" value="signIn" id="SignInBtn">Sign In</button>
                        <div id="SignUp">
                            Don't have an account?
                            <a href="registration.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>  
        <?php } ?>

    </div>


</body>

</html>