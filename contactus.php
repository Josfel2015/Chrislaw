<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Chrislaw.PNG" type="image/x-icon">
        <link rel="stylesheet" href="./assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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
                /* text-align: center; */
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
                /* background-color: #fff; */
                border-radius: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                        0 10px 10px rgba(0,0,0,0.22);
                position: relative;
                /* max-width: 100%; */
                min-height: 480px;
                margin-top: 5%;
                margin-right: 20%;
                margin-left: 20%;
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
                background: #ff4b2bb5;
                background-size: cover;
                background-position: 0 0;
                color: #FFFFFF;
                position: relative;
                left: -100%;
                height: 100%;
                width: 200%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            }
            
            .overlay-panel {
                position: absolute;
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                top: 0;
                height: 100%;
                transform: translateX(0);
                transition: transform 0.6s ease-in-out;
            } 

            .overlay-right {
                right: 0;
                transform: translateX(0);
            }
            h1,a,span{
                color: #1c2541;
            }
            p{
                color: #FFFFFF;
            }

        </style>
        <script>
            function validatecontactform(){
                // the email and pass are id in the input Element
                var name = document.contactform.name.value;
                var email = document.contactform.email.value;
                var msg = document.contactform.msg.value;
                if (name==null||name=="") {
                    alert("pls enter a your name");
                    return false;
                } else if (email==null||email=="") {
                    alert("pls enter a valid email");
                    return false;
                }else if(msg==null||msg==""){
                    alert("pls enter your message");
                    return false;
                }

            }
        </script>
        <title>Chrislaw</title>
    </head>
    <body>

        <!--- Header -->
        <div class="header-login">
            <nav class="nav-bar">
                <img src="./img/Chrislaw.PNG" class="brand-name">
                <a href="#" class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="menu-bar">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                        <li><a href="login.php">Login/Register</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Search Bar -->
        </div>
        
        <!-- Main Content -->
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="" method="POST" name="contactform" onsubmit="return validatecontactform()">
			<h1>Send a request</h1>
            <input type="text" placeholder="Name" name="name" id="name"/>
            <input type="email" placeholder="Email" name="email" id="email"/>
            <textarea rows="8" cols="45" placeholder="Message" name="message" id="msg"></textarea>
            <input type="submit" value="Send" name="login" class="button"/>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Contact Information</h1>
				<p><span><i class="fas fa-map-marker-alt"></i></span> ghana school</p>
                <p><span><i class="fas fa-envelope"></i></span> joseph@gmail.com</p>
                <p><span><i class="fas fa-phone-alt"></i></span> +234 812 3323 345</p>
                <div class="social-btn">
                    <a href="https://www.facebook.com/Chrislaw taste" target="_blank" ><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/Chrislaw taste/" target="_blank" ><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/Chrislaw taste/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Chrislaw taste" target="_blank"><i class="	fab fa-github"></i></a>
                </div>
			</div>
		</div>
	</div>
</div>
        <!--Ending of Recipe Details-->

            <!--Footer-->
    <div class="footer">
        <div class="social-btn">
            <a href="https://www.facebook.com/Chrislaw taste" target="_blank" ><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/Chrislaw taste/" target="_blank" ><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/Chrislaw taste/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/Chrislaw taste" target="_blank"><i class="	fab fa-github"></i></a>
        </div>
        <div class="quick-bar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contactus.php">Contact</a>
            <a href="login.php">Login/Register</a>
        </div>
        <p>Copyright &copy; <?php echo date('Y') ?> Chrislaw. All right reserved</p>  
    </div>

    <!--Ending of Footer-->
<!--Script for Javascript-->
<script src="./assets/index.js"></script>
    
</body>
</html>
