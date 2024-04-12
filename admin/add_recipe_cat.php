<?php 
    include('check_user.php');
    require_once('../db/db_connection.php');
    if (isset($_POST['submit'])) {
        $recipe_cat = $_POST['recipe_cat'];
        $sql = "INSERT INTO reci_cat(recipe_cat)VALUES(?)";
        $qry = $conn->prepare($sql);
        $qry->bind_param('s',$recipe_cat);
        $qry->execute();
        if ($qry) {
            echo "
            <script>alert('Recipe Category Added')</script>
            ";
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
    <title>Add Recipe Category : Chrislaw Admin</title>
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
                            Add recipe Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="add_recipe_cat.php">
                                        <div class="form-group">
                                            <label>Enter Recipe Category</label>
                                            <input type="text" name="recipe_cat" class="form-control" placeholder="PLease Enter Recipe Category" required/>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-success">
                                        <input type="reset" class="btn btn-primary">
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
