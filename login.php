<?php 
    require_once('db/db_connection.php');

    // register code 
    if (isset($_POST['reg'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = 'chef';

        $sql = "INSERT INTO users(name,email,password,role)VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $res = $stmt->bind_param('ssss',$full_name,$email,$password,$role);
        $stmt->execute();
        if ($sql) {
            echo "<script>alert('Successfully registered')</script>";
        }else{
            echo "<script>alert('Please check your connection')</script>";
        }
    }

    // login code 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $stmt = $conn->query($sql);
        if ($stmt->num_rows > 0) {
            while ($row = $stmt->fetch_assoc()) {
                session_start();
                $_SESSION['password'] = true;
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $role = $row['role'];

                if ($role=='admin') {
                    echo "<script>alert('welcome to the admin page');
                    window.location='admin/'
                    </script>";
                }else {
                    echo "<script>alert('welcome to Chef page');
                    window.location='chef/'
                    </script>";
                }
            }
        }else{
            echo "<script>alert('User not exist')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Chrislaw.PNG" type="image/x-icon">
        <link rel="stylesheet" href="./assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <style>
            .header-login{
                height: 80px;
            }
            .button {
                border-radius: 20px;
                border: 1px solid #FF4B2B;
                background-color: #FF4B2B;
                color: #FFFFFF;
                font-size: 12px;
                font-weight: bold;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
            }

            form {
                background-color: #FFFFFF;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 50px;
                height: 100%;
                text-align: center;
            }

            input {
                background-color: #eee;
                border: none;
                padding: 12px 15px;
                margin: 8px 0;
                width: 100%;
                color: #1c2541;
            } 

            .container {
                border-radius: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                        0 10px 10px rgba(0,0,0,0.22);
                position: relative;
                min-height: 480px;
                margin-top: 5%;
                margin-right: 23%;
                margin-left: 22%;
                margin-bottom: 5%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            
            .form-container {
                position: absolute;
                top: 0;
                height: 100%;
                transition: all 0.6s ease-in-out;
            }

            .sign-in-container {
                left: 0;
                width: 50%;
                z-index: 2;
            }

            .container.right-panel-active .sign-in-container {
                transform: translateX(100%);
            }

            .sign-up-container {
                left: 0;
                width: 50%;
                opacity: 0;
                z-index: 1;
            }

            .container.right-panel-active .sign-up-container {
                transform: translateX(100%);
                opacity: 1;
                z-index: 5;
                animation: show 0.6s;
            }

            .overlay-container {
                position: absolute;
                top: 0;
                left: 50%;
                width: 50%;
                height: 100%;
                overflow: hidden;
                transition: transform 0.6s ease-in-out;
                z-index: 100;
            }

            .container.right-panel-active .overlay-container{
                transform: translateX(-100%);
            }

            .overlay {
                background: #f4eeef;                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0 0;
                position: relative;
                left: -100%;
                height: 100%;
                width: 200%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            }

            .container.right-panel-active .overlay {
                transform: translateX(50%);
            } 
            
            .overlay-panel {
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                text-align: center;
                top: 0;
                height: 100%;
                width: 50%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            } 

            .overlay-left {
                transform: translateX(-20%);
            }

            .container.right-panel-active .overlay-left {
                transform: translateX(0);
            } 

            .overlay-right {
                right: 0;
                transform: translateX(0);
            }

            .container.right-panel-active .overlay-right {
                transform: translateX(20%);
            } 
            h1,a,span{
                color: #1c2541;
            }
            p{
                color: #FFFFFF;
            }

        </style>
        <script>
            function validatelogform(){
                // the email and pass are id in the input Element
                var email = document.logform.email.value;
                var pass = document.logform.pass.value;
                if (email==null||email=="") {
                    alert("pls enter a valid email");
                    return false;
                }else if(pass.length<6){
                    alert("password must be 6 character long");
                    return false;
                }

            }

            function validateregform(){
                var fname = document.regform.fname.value;
                var email = document.regform.email.value;
                var pass = document.regform.pass.value;
                var pass1 = document.regform.pass1.value;
                if (fname==null||fname=="") {
                    alert('pls enter your full name');
                    return false;
                } else if(email==null||email=="") {
                    alert("please your email");
                    return false;
                }else if(pass.length<6){
                    alert('password must be longer than 6');
                    return false;
                }else if(pass==pass1){
                    return true;
                }else{
                    alert("password must be match");
                    return false;
                }
            }
        </script>
        <title>Chrislaw</title>
    </head>
    <body>

        <!--- Header -->
        <div class="header-login">
            <?php include('navbar.php')?>
            <!-- Search Bar -->
        </div>
        
        <!-- Main Content -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" name="regform" onsubmit="return validateregform()">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="full_name" id="fname"/>
			<input type="email" placeholder="Email" name="email" id="email"/>
			<input type="password" placeholder="Password" name="password" id="pass"/>
            <input type="password" placeholder="Confirm Password" id="pass1"/>
            <input type="submit" value="Sign Up" name="reg" class="button"/>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" name="logform" onsubmit="return validatelogform()">
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" id="email"/>
			<input type="password" placeholder="Password" name="password" id="pass"/>
            <input type="submit" value="Sign In" name="login" class="button"/>
            <br/><br/>
        </form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p style="color: #FF4B2B;">To keep connected with us please login with your personal info</p>
				<button id="signIn" class="button">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p style="color: #FF4B2B;">Enter your personal details and start a journey with us</p>
				<button id="signUp" class="button">Sign Up</button>
			</div>
		</div>
	</div>
</div>
        <!--Ending of Recipe Details-->

            <!--Footer-->
    <div class="footer">
        <div class="social-btn">
            <a href="https://www.facebook.com/Chrislaw taste" target="_blank" ><i class="	fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/Chrislaw taste/" target="_blank" ><i class="	fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/Chrislaw taste/" target="_blank"><i class="	fab fa-linkedin"></i></a>
            <a href="https://github.com/Chrislaw taste" target="_blank"><i class="	fab fa-github"></i></a>
        </div>
        <div class="quick-bar">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contactus.php">Contact</a>
            <a href="login.php">Login/Register</a>
        </div>
        <p>Copyright &copy; <?php echo date('Y') ?> Chrislaw. All right reserved</p>  
    </div>

    <!--Ending of Footer-->
<!--Script for Javascript-->
<script src="./assets/index.js"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>
