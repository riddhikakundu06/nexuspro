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
            <h1 id="title">Sign In</h1>
            <form id="signInForm">
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
                        <button type="submit" id="SignInBtn">Sign In</button>
                        <div id="SignUp">
                            Don't have an account?
                            <a href="registration.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>        
    </div>


</body>

</html>