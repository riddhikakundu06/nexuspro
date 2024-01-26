<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="CSS/styleSign.css">
    <script src="https://kit.fontawesome.com/437c001710.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="grad">
        <div class="form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['Sign Up'])){
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $Password = $_POST['Password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$Email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Name,Email,Phone,Password) VALUES('$Name','$Email','$Phone','$Password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>


            <h1 id="title">Sign Up</h1>
                <form id="signupForm">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="Name" placeholder="Enter your name (min. 6 characters)" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-field" id="phnumberField">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="Phone" placeholder="Enter your phone number (123-456-7890)" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="Password" placeholder="Enter your password" required>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <div class="btn-field">
                        <button type="submit" id="SignUpBtn">Sign Up</button>
                        <div id="SignIn">
                            Already have an account?
                            <a href="login.php">Sign In</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>