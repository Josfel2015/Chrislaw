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
            }

            button, a{
                text-decoration: none;
            }

            .container {
                background: #f4eeef;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                        0 10px 10px rgba(0,0,0,0.22);
                position: relative;
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
            
            h1,a,span{
                color: #1c2541;
            }
            .display-comment{
                display: inline-block;
                padding-right: 20px;
            }
            #comment-section{
                display: flex;
                float: right;
            }
            .comment-group{
                display: inline-block;
            }
        </style>
        <title>Chrislaw View Recipe</title>
    
    </head>
    <body>

        <!--- Header -->
        <div class="header-login">
            <?php include('navbar.php')?>
            <!-- Search Bar -->
        </div>
        
        <!-- Main Content -->
        <div class="container">
            <?php
                require_once('db/db_connection.php');
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql1 = "SELECT * FROM reci_list WHERE id='$id'";
                    $qry1 = $conn->query($sql1);
                    if ($qry1->num_rows > 0) {
                        while ($row1=$qry1->fetch_array()) {
            ?>
                    <h2 class="meal-name">
                        <?php echo $row1['recipe_cat'].' : '.$row1['recipe_name']?>
                    </h2>
                    <div class="card-header card-image">
                        <img src="./img/<?php echo $row1['recipe_img']?>">
                    </div>
                    <h4>Ingridients:</h4>
                    <p>
                        <?php echo $row1['ingredient']?>
                    </p>
                    <h4>Instruction:</h4>
                    <p>
                        <?php echo $row1['instruction'] ?>
                    </p>
                    <h4>Portion:</h4>
                    <p>
                        <?php echo $row1['portion'] ?>
                    </p>
                        
                    <?php 
                            if (isset($_POST['comment_send'])) {
                                $comment = $_POST['comment'];
                                $sql = "INSERT INTO reci_comment(reci_id,comment)VALUES('$id','$comment')";
                                $qry = $conn->query($sql);
                                if ($qry) {
                                    echo "<script>alert('commet sent');
                                    window.location='index.php'
                                    </script>";
                                }else{
                                    echo "<script>alert('Please check your conection') </script>";
                                }
                                
                            }
                        ?>
                
                <!--  -->
                    <button class="button"><a href="index.php">Go To Home</a></button>
                    <br>
                    <section class="comment-group">
                        <section id="comment-section">
                            <form method="post" action="">
                                <div class="form-group">
                                    <textarea cols="50" rows="6" class="form-control" name="comment" cols="8" rows="4" name="comment" required placeholder="please a comment"></textarea> <br>
                                    <center>
                                        <button class="button" name="comment_send" type="submit">Submit Comment</button>
                                    </center>
                                </div>    
                            </form>
                        </section>
                        <section class="display-comment">
                        <?php 
                            $commsql = "SELECT comment FROM reci_comment WHERE reci_id='$id'";
                            $commqry = $conn->query($commsql);
                            if ($commqry->num_rows > 0) {
                                while ($commrow=$commqry->fetch_array()) {
                        ?>
                            <p><?php echo isset($commrow[0]) ? $commrow[0]:'';
                            }}?></p>
                        </section>
                    </section>
                    
                    <br>
                    <?php } }}?>
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
    </body>
</html>