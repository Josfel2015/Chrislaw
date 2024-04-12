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
            p{
                color: #fff;
            }
            header, div{
                color: #1C2541;
            }
            header{
                font-weight: 500;
                font-size: xx-large;
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
        <div class="header">
           <?php include('navbar.php')?>
            <!-- Search Bar -->
            <div class="title">Explore our Recipes</div>
            <div class="search-wrapper">
                <div class="fa fa-search"></div>
                <input type="text" name=""  id="search" placeholder="Search your recipes here?" onkeyup="search()">
            </div>
        </div>

        <!-- Search Results -->
        <div class="result">
            <h1>Your Search Result: </h1>
        </div>
              
        <!-- Main Content -->
        <div class="card-grid" >
            <div class="food-list" id="food-list">
                <p id="none" style="display: none;">Sorry, the recipe you were looking for was not available.</p>
                <?php
                        require_once('db/db_connection.php');
                        $sql = "SELECT * FROM reci_list where recipe_cat='Abuja'";
                        $qry = $conn->query($sql);
                        if ($qry->num_rows > 0) {
                            while ($row=$qry->fetch_array()) {
                                $id = $row['id'];
                    ?>  
                <div class="card card-shadow">
                     
                    <div class="card-header card-image">
                        <img src="./img/<?php echo $row['recipe_img']?>">
                    </div>
                    <div class="card-body" >
                        <h3> <?php echo $row['recipe_cat'].' : '.$row['recipe_name']?></h3>
                    </div>
                    <div class="card-footer">
                        <!-- <button class="btn" id="<!?php echo $row['id']?>" onclick="getRecipeDetails()">Recipe</button> -->
                        <a href="view_recipe.php?id=<?php echo $row['id']?>"> <button class="btn" onclick="getRecipeDetails()">View Recipe</button></a>
                    </div>
                    <div style="color: white;">
                    <?php 
                        $commsql = "SELECT reci_id FROM reci_comment WHERE reci_id='$id'";
                        $commqry = $conn->query($commsql);
                        $commres = $commqry->num_rows;
                    ?>
                        <i class="fa fa-comment"></i> <?php echo $commres;?>
                    </div> 
                    
                </div>
                
                <?php }}else{
                           
                           echo "Sorry, the recipe you were looking for was not available.";
                  } ?>
            </div> 
            <!--Ending of Main Content-->
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
</body>
</html>
