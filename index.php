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
            .section{
                display: flex;
                justify-content: center;
                margin-top: -8%;
            }
            #story{
                text-align: justify;
                width: 40%;
                background-color: #80808033;
                padding: 10px;
            }
            #health{
                width: 40%;
                margin-left: 5%;
                text-align: justify;  
                background-color: #7aa0bb4d; 
                padding: 10px;         
            }
            header, div{
                color: #1C2541;
            }
            header{
                font-weight: 500;
                font-size: xx-large;
            }
            #testi{
                width: 85%;
                justify-content: center;
                display: grid;
                margin-left: 7.5%;
                background-color: #d746d745;
                margin-right: 10%;
                padding: 5px;
                margin-top: 1%;
                margin-bottom: 1%;
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
                .statistics{
                display: flex;
                justify-content: center;
                margin-top: -8%;
                margin-bottom: 10%;
            }
            #story-stat{
                text-align: justify;
                width: 25%;
                background-color: #03091ef7;
                padding: 10px;
            }
            #health-stat{
                width: 25%;
                margin-left: 5%;
                text-align: justify;  
                background-color: #03091ef7; 
                padding: 10px;         
            }
            #chef-stat{
                width: 25%;
                margin-left: 5%;
                text-align: justify;  
                background-color: #03091ef7; 
                padding: 10px;         
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
                        $sql = "SELECT * FROM reci_list";
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
                
                <?php }} ?>
            </div> 
            <!--Ending of Main Content-->
        </div>
        
            <!--Ending of Recipe Details-->
           <div class="statistics">
            <div id="story-stat">
                <?php 
                    $catsql = "SELECT id FROM reci_cat";
                    $catqry = $conn->query($catsql);
                    $catres = $catqry->num_rows;
                ?>
                <header style="color: #fff;"><?php echo $catres?></header>
                <header style="color: #fff;">Receipe Category</header>
            </div>
            <div id="health-stat">
                <?php 
                    $listsql = "SELECT id FROM reci_list";
                    $listqry = $conn->query($listsql);
                    $listres = $listqry->num_rows;
                ?>
                <header style="color: #fff;"><?php echo $listres?></header>
                <header style="color: #fff;">Recipes</header>
            </div>
            <div id="chef-stat">
                <?php 
                    $usersql = "SELECT id FROM users WHERE role='chef'";
                    $userqry = $conn->query($usersql);
                    $userres = $userqry->num_rows;
                ?>
                <header style="color: #fff;"><?php echo $userres?></header>
                <header style="color: #fff;">Registered chef</header>
            </div>

        </div>
        <div class="section">
            <div id="story">
                <header>Our Story</header>
                <div>
                    Are you ready to be the frontline hero for all things IT? 
                    We're seeking a dynamic individual to join our team as an IT Support 
                    Specialist. As the first point of contact for 105 users with IT queries, 
                    you'll play a pivotal role in ensuring seamless operations across the 
                    company. Working closely with the IT manager, you'll assist in day-to-day 
                    tasks while responding promptly to service issues and requests. Whether 
                    it's troubleshooting technical problems over the phone or in person, 
                    installing software, or configuring hardware, your expertise will be 
                    critical.
                </div>
            </div>
            <div id="health">
                <header>Health Talk</header>
                <div>
                Ensure you always eat healthy foods to build up your immune system and be protected from chronic diseases.
                This week, we would be sharing tips on how to shop for healthy foods: remember to follow this guide each time you are out shopping: 
            •	Make a shopping list before you step out, ensure you plan what to eat.
            •	Manage your pantry, do not run out of ingredients, especially those that take less time to cook.
            •	Stock up on seasonal vegetables, fruit, wholegrains, nuts and seeds.
            •	Choose the lower fat versions of a food if possible – for example milk, cheese, yoghurt, salad dressings and gravies.
            •	Choose lean meat, reduce dairy products.
            •	Avoid junk or fast foods, they are not good for your health.
            •	Ensure you drink enough clean water.
 
                </div>
                <header>Cooking Tips</header>
                <div>
                1.	Always keep the lid on the pot, it gets your water to boil faster.
                2.	Ensure you wear your apron and caps when cooking.

                </div>
            </div>
        </div>
        <div id="testi">
            <header style="text-align:center;">TESTIMONIALS</header>
            <div>
            What has been your culinary experience with our Recipes? We will be glad to publish your stories to the world. 
            Tantalize your taste buds with Chrislaw recipes.

            </div>
        </div>
        
            <!--Footer-->
    <div class="footer">
        <div class="social-btn">
            <a href="https://www.facebook.com/Chrislaw taste" target="_blank" ><i class="	fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/Chrislaw taste/" target="_blank" ><i class="	fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/Chrislaw taste/" target="_blank"><i class="	fab fa-linkedin"></i></a>
            <a href="https://github.com/Chrislaw taste" target="_blank" "><i class="	fab fa-github"></i></a>
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
