<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./img/Chrislaw.PNG" type="image/x-icon">
        <link rel="stylesheet" href="./assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Chrislaw</title>
    </head>
    <body>

        <!--- Header -->
        <div class="header">
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
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Search Bar -->
            <div class="title">Explore our Recipes</div>
            <div class="search-wrapper">
                <div class="fa fa-search"></div>
                <input type="text" name=""  id="search" placeholder="Search your recipes here?" onkeyup="search()">
                <div class="fa fa-times" onclick="clearInput()" ></div>
            </div>
        </div>

        <!-- Search Results -->
        <div class="result">
            <h1>Your Search Result: </h1>
        </div>
        
        <!-- Main Content -->
        <div class="card-grid" >
            <div class="food-list" id="food-list">
                <p id="none" style="display: none;">Sorry, the recipe you are looking for is not available.</p>
                <div class="card card-shadow">
                    <div class="card-header card-image">
                        <img src="./img/Sisig.webp">
                    </div>
                    <div class="card-body" >
                        <h3> Sisig </h3>
                    </div>
                    <div class="card-footer">
                        <button class="btn" onclick="getRecipeDetails()">View Recipe</button>
                    </div>
                </div>
                <div class="card card-shadow">
                    <div class="card-header card-image">
                        <img src="./img/Adobo.webp">
                    </div>
                    <div class="card-body" >
                        <h3> Adobo </h3>
                    </div>
                    <div class="card-footer">
                        <button class="btn" onclick="get2ndRecipe()">View Recipe</button>
                    </div>
                </div>
                <div class="card card-shadow">
                    <div class="card-header card-image">
                        <img src="./img/Sizzling.webp">
                    </div>
                    <div class="card-body" >
                        <h3>Sizzling Porkchop</h3>
                    </div>
                    <div class="card-footer">
                        <button class="btn" onclick="get3rdRecipe()">View Recipe</button>
                    </div>
                </div>
                <div class="card card-shadow">
                    <div class="card-header card-image">
                        <img src="./img/Omelette.webp">
                    </div>
                    <div class="card-body" >
                        <h3>Omelette</h3>
                    </div>
                    <div class="card-footer">
                        <button class="btn" onclick="get4thRecipe()">View Recipe</button>
                    </div>
                </div>
                <div class="card card-shadow">
                    <div class="card-header card-image">
                        <img src="./img/Sinigang.webp">
                    </div>
                    <div class="card-body" >
                    <h3> Sinigang </h3>
                    </div>
                    <div class="card-footer">
                        <button class="btn" onclick="get5thRecipe()">View Recipe</button>
                    </div>
                </div>
                <div class="card card-shadow">
                    <div class="card-header card-image">
                        <img src="./img/Lumpia.webp">
                    </div>
                    <div class="card-body" >
                    <h3> Lumpia</h3>
                    </div>
                    <div class="card-footer">
                        <button class="btn" onclick="get6thRecipe()">View Recipe</button>
                    </div>
                </div>
            </div> 

            <!--Ending of Main Content-->

            <!--Recipe Details-->
            <div class = "meal-detail" id="meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Sisig</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Sisig is a Filipino dish made from parts of a pig's face and belly, and chicken liver which is usually seasoned with calamansi, onions, and chili peppers. It originates from the Pampanga region in Luzon. Sisig is a staple of Kapampangan cuisine. </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1 lb. pig ears
                            <br>1 1/2 lb pork belly
                            <br>1 piece onion minced
                            <br>3 tablespoons soy sauce
                            <br>1/4 teaspoon ground black pepper
                            <br>1 knob ginger minced (optional)
                            <br>3 tablespoons chili flakes
                            <br>1/2 teaspoon garlic powder
                            <br>1 piece lemon or 3 to 5 pieces calamansi
                            <br>½ cup butter or margarine
                            <br>¼ lb chicken liver
                            <br>6 cups water
                            <br> 3 tablespoons mayonnaise
                            <br>1/2 teaspoon salt
                            <br> 1 piece egg (optional)
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>Pour the water in a pan and bring to a boil Add salt and pepper.
                            <br>Put-in the pig’s ears and pork belly then simmer for 40 minutes to 1 hour (or until tender).
                            <br>Remove the boiled ingredients from the pot then drain excess water
                            <br>Grill the boiled pig ears and pork belly until done
                            <br>Chop the pig ears and pork belly into fine pieces
                            <br>In a wide pan, melt the butter or margarine. Add the onions. Cook until onions are soft.
                            <br>Put-in the ginger and cook for 2 minutes
                            <br>Add the chicken liver. Crush the chicken liver while cooking it in the pan.
                            <br>Add the chopped pig ears and pork belly. Cook for 10 to 12 minutes
                            <br>Put-in the soy sauce, garlic powder, and chili. Mix well
                            <br>Add salt and pepper to taste
                            <br>Put-in the mayonnaise and mix with the other ingredients
                            <br>Transfer to a serving plate. Top with chopped green onions and raw egg.
                            <br>Serve hot. Share and Enjoy (add the lemon or calamansi before eating)
                        </p>
                    </div>
                </div>
            </div>
            <div class = "second-meal-detail" id="second-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Adobo</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Philippine adobo is a popular Filipino dish and cooking process in Philippine cuisine that involves meat, seafood, or vegetables marinated in vinegar, soy sauce, garlic, bay leaves, and black peppercorns, which is browned in oil, and simmered in the marinade. </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>2 lbs pork belly
                            <br>2 tablespoons garlic minced or crushed
                            <br>5 dried bay leaves
                            <br>4 tablespoons vinegar
                            <br>1/2 cup soy sauce
                            <br>1 tablespoon peppercorn
                            <br>2 cups water
                            <br>Salt to taste
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Combine the pork belly, soy sauce, and garlic then marinade for at least 1 hour
                            <br>2. Heat the pot and put-in the marinated pork belly then cook for a few minutes
                            <br>3. Pour remaining marinade including garlic.
                            <br>4. Add water, whole pepper corn, and dried bay leaves then bring to a boil. Simmer for 40 minutes to 1 hour
                            <br>5. Put-in the vinegar and simmer for 12 to 15 minutes
                            <br>6. Add salt to taste
                            <br>7. Serve hot. Share and enjoy!
                        </p>
                    </div>
                </div>
            </div>  
            <div class = "third-meal-detail" id="third-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Sizzling Porkchop</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Sizzling Pork Chop tastes excellent and is simple to make. The sizzling effect adds to the pleasure of this dish. Aside from the pork chop, this dish requires mixed veggies, yellow rice, and gravy. I used fresh frozen mixed vegetables for the vegetables. 
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1 piece 8 oz pork loin chop
                            <br>1 cup beef broth
                            <br>1/4 teaspoon salt
                            <br>1/4 teaspoon ground black pepper
                            <br>1/4 teaspoon garlic powder
                            <br>3/4 cup mixed vegetables cooked
                            <br>3 tablespoons all-purpose flour
                            <br>4 tablespoons butter
                            <br>1 cup yellow rice
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Rub salt, ground black pepper, and garlic powder on the pork tenderloin chop. Let it stay for at least 30 minutes.
                            2. Make the gravy by melting 1 tablespoon butter in a saucepan. When the butter melts, gradually add the flour and whisk until the color turns light brown. Pour-in the beef broth and stir. Add salt and pepper according to taste. Continue cooking until the texture becomes thick. Set aside.
                            3. Heat a skillet of frying pan then put-in 2 tablespoons of butter and let melt.
                            4. Pan-fry the pork loin chop in medium heat until the color of each side turns light brown (approximately 7 to 8 minutes per side). Set aside.
                            5. Heat a sizzling plate or fajita plate then put-in 1 tablespoon butter.
                            6. Distribute the butter around the plate then arrange rice, mixed vegetables, and pork loin chop.
                            7. Pour gravy over the pork loin chop then turn-off heat.
                            8. Serve. Share and enjoy!
                        </p>
                    </div>
                </div>
            </div>  
            <div class = "four-meal-detail" id="four-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Omelette</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">In cuisine, an omelette is a dish made from beaten eggs, fried with butter or oil in a frying pan. It is quite common for the omelette to be folded around fillings such as chives, vegetables, mushrooms, meat, cheese, onions or some combination of the above. 
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>3 eggs, beaten
                            <br>1 tsp sunflower oil
                            <br>1 tsp butter
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Beat the eggs: Use two or three eggs per omelette, depending on how hungry you are. Beat the eggs lightly with a fork.
                            2. Melt the butter: Use an 8-inch nonstick skillet for a 2-egg omelette, a 9-inch skillet for 3 eggs. Melt the butter over medium-low heat, and keep the temperature low and slow when cooking the eggs so the bottom doesn’t get too brown or overcooked.
                            3. Add the eggs: Let the eggs sit for a minute, then use a heatproof silicone spatula to gently lift the cooked eggs from the edges of the pan. Tilt the pan to allow the uncooked eggs to flow to the edge of the pan.
                            4. Fill the omelette: Add the filling—but don’t overstuff the omelette—when the eggs begin to set. Cook for a few more seconds
                            5. Fold and serve: Fold the omelette in half. Slide it onto a plate with the help of a silicone spatula.
                        </p>
                    </div>
                </div>
            </div>  
            <div class = "five-meal-detail" id="five-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Sinigang</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Sinigang is a Filipino soup or stew characterized by its sour and savory taste. It is most often associated with tamarind, although it can use other sour fruits and leaves as the souring agent. It is one of the more popular dishes in Filipino cuisine.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>2 lbs pork belly or buto-buto
                            <br>1 bunch spinach or kang-kong
                            <br>3 tablespoons fish sauce
                            <br>12 pieces string beans sitaw, cut in 2 inch length
                            <br>2 pieces tomato quartered
                            <br>3 pieces chili or banana pepper
                            <br>1 tablespoons cooking oil
                            <br>2 quarts water
                            <br>1 piece onion sliced
                            <br>2 pieces taro gabi, quartered
                            <br>1 pack sinigang mix good for 2 liters water
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Heat the pot and put-in the cooking oil
                            <br>2. Sauté the onion until its layers separate from each other
                            <br>3.Add the pork belly and cook until outer part turns light brown
                            <br>4. Put-in the fish sauce and mix with the ingredients
                            <br>5. Pour the water and bring to a boil
                            <br>6. Add the taro and tomatoes then simmer for 40 minutes or until pork is tender
                            <br>7. Put-in the sinigang mix and chili
                            <br>8. Add the string beans (and other vegetables if there are any) and simmer for 5 to 8 minutes
                            <br>9. Put-in the spinach, turn off the heat, and cover the pot. Let the spinach cook using the remaining heat in the pot.
                            <br>10. Serve hot. Share and enjoy!
                        </p>
                    </div>
                </div>
            </div> 
            <div class = "six-meal-detail" id="six-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Lumpia</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Different spring rolls known as "lumpia" are popular in the Philippines and Indonesia. Lumpia are formed of a thin pastry skin, also known as a "lumpia wrapper," that encloses either savory or sweet fillings. It may be either fresh or deep-fried and is frequently served as an appetizer or snack.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>50 pieces lumpia wrapper (Up to you how many pieces)
                            <br>3 cups cooking oil
                            <br>1 1/2 lbs ground pork
                            <br>2 pieces onion minced
                            <br>2 pieces carrots minced
                            <br>1 1/2 teaspoons garlic powder
                            <br>1/2 teaspoon ground black pepper
                            <br>1/2 cup parsley chopped
                            <br>1 1/2 teaspoons salt
                            <br>1 tablespoon sesame oil
                            <br>2 eggs
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Combine all filling ingredients in a bowl. Mix well.
                            <br>2. Scoop around 1 to 1 1/2 tablespoons of filling and place over a piece of lumpia wrapper. Spread the filling and then fold both sides of the wrapper. Fold the bottom. Brush beaten egg mixture on the top end of the wrapper. Roll-up until completely wrapped. Perform the same step until all mixture are consumed.
                            <br>3. Heat oil in a cooking pot. Deep fry lumpia in medium heat until it floats.
                            <br>4. Remove from the pot. Let excess oil drip. Serve. Share and enjoy
                        </p>
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
            <a href="https://github.com/Chrislaw taste" target="_blank" "><i class="	fab fa-github"></i></a>
        </div>
        <div class="quick-bar">
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
        <p>Copyright &copy; <?php echo date('Y') ?> Chrislaw. All right reserved</p>  
    </div>

    <!--Ending of Footer-->
<!--Script for Javascript-->
<script src="./assets/index.js"></script>
</body>
</html>
