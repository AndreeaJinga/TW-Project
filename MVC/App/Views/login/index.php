<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <?php   
            $maincss = realpath('../../../Public/css/logincss/login.css');
            if($maincss == false) {
                echo "<link rel=\"stylesheet\" href=\"css/logincss/login.css\">";
            }
            else {
                echo "<link rel=\"stylesheet\" href=\"../../../Public/css/logincss/login.css\">";
            }
            
            $menucss = realpath('../../../Public/css/globals/header2.css');
            if($menucss == false) {
                echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
            }
            else {
                echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
            }
        ?>


        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="apple-touch-icon" sizes="180x180" href="./Logo/apple-touch-icon.png">
        <link rel="manifest" href="./Logo/site.webmanifest">
    </head>
    <body>
        <a href="../home/index.php">
            <div class="home">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <button class="btn">
                    
                    <i class="fa fa-home"></i> 
                    Home
                </button>
            </div>
        </a>

        <div id="bg"></div>
    
        <div class="zone">
            <div class="container">
                <div class="Login">
                    <div class="box Signin">
                        <h2>Already have an account?</h2>
                        <button class="signinButton">Sign in</button>
                    </div>
                    <div class="box Signup">
                        <h2>You don't have an account?</h2>
                        <button class="registerButton">Sign up</button>
                    </div>
                </div>
                <div class="form">
                    <div class="form Signin">
                        <form action="../../controllers/loginForm.php" method="post">
                            <h3>Sign into your account</h3>
                            <input type="text" name="uid" placeholder="Username or Email" required>
                            <input type="password" name="pwd" placeholder="Password" required>
                            <!-- <a href="../HomePage/HomePage.html"></a>-->
                            <input type="submit" name="submit" value="Login"> 
                            <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><input type="button" value="Login with Google"></a>
                            <a href="https://ro-ro.facebook.com/login.php?next=https%3A%2F%2Fro-ro.facebook.com%2Fprivacy%2Fconsent%2Fuser_cookie_choice%2F%3Fsource%3Dpft_user_cookie_choice"><input type="button" value="Login with Facebook"></a>
                            <a href="#" class="forgot">Forgot Password</a>
                        </form>
                    </div>

                    <div class="form Signup">
                        <form action="../../controllers/signupForm.php" method="post">
                            <h3>Create your account</h3>
                            <input type="text" name="uid" placeholder="Username" required>
                            <input type="email" name="email" placeholder="Email Addres" required>
                            <input type="password" name="pwd" placeholder="Password" required>
                            <input type="password" name="pwdrepeat" placeholder="Confirm Password" required>
                            <input type="submit" name="submit" value="Register">
                            <h4>By signing up, you agree to our </h4>
                            <a href="#" class="terms">terms and conditions.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const signinButton = document.querySelector('.signinButton');
            const registerButton = document.querySelector('.registerButton');
            const form = document.querySelector('.form');
            const body = document.querySelector('body');

            registerButton.onclick = function(){
                form.classList.add('active')
                body.classList.add('active')
            }
            signinButton.onclick = function(){
                form.classList.remove('active')
                body.classList.remove('active')
            }
        </script>
    </body>
</html>