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
           .myabout {
                margin-top: 10%;
                margin-bottom: 9%;
                display: inline-flex;
                padding: 10px;
                clear: both;
                float: right;
                margin-right: 12%;
                margin-left: 12%;
                height: auto;
                text-align: justify;
            }
            div, .myabout {
                color: #000000;
            }
            #about-left {
                display: flex;
                justify-content: center;
                font-size: 2rem;
                padding-right: 20px;
            }
            #about-right {
                display: flex;
                justify-content: center;
                font-size: 1rem;
            }
            .dropdown:hover .dropdown-content {
                display: block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }
                ul a:hover, .dropdown:hover .dropbtn {
                background-color: red;
                }
                .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
                }
        </style>
        <title>Chrislaw</title>
    </head>
    <body>

        <!--- Header -->
        <div class="header-login">
            <?php include('navbar.php')?>
            <!-- Search Bar -->
        </div>
        
        <!-- Main Content -->
        <section class="myabout">
            <div id="about-left"></div>
            <div id="about-right">
                <p style="display: contents;font-weight:500;color: #1c2541;">About US</p> <br/> 
                 We're not just another website; we are your culinary companion on a journey of 
                taste and creativity! At Chrislaw, we are committed to simplifying the art of
                cooking for all food enthusiasts.<br>
                Whether you are cooking solo, with friends, or hosting a cookathon, we offer a 
                host of meticulously researched, tested, and beloved recipes curated from a 
                diverse community of food lovers. But that's not all – just like the perfect 
                icing on a cake, we provide invaluable cooking instructions and meal serving 
                techniques to elevate your culinary experience. Whether you are a seasoned chef 
                or a curious recipe seeker, we are here to delight your palate and inspire your 
                kitchen adventures. 
                <br/>    
                <p style="display: contents; font-weight:500; color: #1c2541;">
                    cooking with Chrislaw! #Cookathon!
                </p>  
                <br>    
                <p style="display: contents; font-weight:500; color:blueviolet">
                    NAME: JOSEPH OLOJEDE 
                </p> <BR/>     
            </div>
        </section>
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
</body>
</html>
