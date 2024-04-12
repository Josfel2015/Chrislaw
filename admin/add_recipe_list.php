<?php 
    include('check_user.php');
    require_once('../db/db_connection.php');
    if (isset($_POST['send'])) {
        $recipe_cat = $_POST['recipe_cat'];
        $recipe_name = $_POST['recipe_name'];
        // $recipe_img = $_POST['recipe_img'];
        $ingredient =$_POST['ingredient'];
        $instruction = $_POST['instruction'];
        $portion = $_POST['portion'];


        $recipe_img = $_FILES["recipe_img"]["name"];
        $folder = "../img/".$recipe_img;
        $temp = $_FILES['recipe_img']['tmp_name'];
        move_uploaded_file($temp, $folder);

        $sql = "INSERT INTO reci_list(recipe_cat,recipe_name,recipe_img,ingredient,instruction,portion)VALUES(?,?,?,?,?,?)";
        $qry = $conn->prepare($sql);
        $qry->bind_param('ssssss',$recipe_cat,$recipe_name,$recipe_img,$ingredient,$instruction,$portion);
        $qry->execute();
        if ($qry) {
            echo "<script>alert('Recipe successfylly added')</script>";
        }else {
            echo "<script>alert('Please check your connection')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Recipe List : Chrislaw Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <?php include('navigation.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                 <!-- /. ROW  -->
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add recipe list
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" action="add_recipe_list.php" enctype="multipart/form-data" method="POST">
                                        <div class="form-group">
                                            <label>Recipe Category</label>
                                           <select name="recipe_cat" class="form-control">
                                            <option value="">Select</option>
                                           <?php 
                                                $sql = "SELECT * FROM reci_cat";
                                                $qry = $conn->query($sql); 
                                                while ($row = $qry->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row['recipe_cat']; ?>"><?php echo $row['recipe_cat']; ?></option>
                                             <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Recipe Name</label>
                                            <input type="text" name="recipe_name" class="form-control" placeholder="enter recipe name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Input Recipe picture</label>
                                            <input type="file" name="recipe_img" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Recipe ingredients</label>
                                            <textarea name="ingredient" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Recipe Instruction</label>
                                            <textarea name="instruction" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Portion</label>
                                            <input type="text" name="portion" class="form-control" placeholder="enter portion" required>
                                        </div>
                                        <input type="submit" value="Submit" name="send" class="btn btn-success">
                                        <button type="reset" class="btn btn-danger">Reset Button</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
