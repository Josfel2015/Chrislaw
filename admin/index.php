<?php 
    // error_reporting(0);
    include('check_user.php');
    $myid = $_SESSION['id'];
    require_once('../db/db_connection.php');
    $sql = "SELECT * FROM users WHERE id='$myid'";
    $stmt = $conn->query($sql);
    if ($stmt->num_rows > 0) {
        while ($row = $stmt->fetch_assoc()) {
            $name = $row['name'];
            // $conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>chrislaw Admin home</title>
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
        
        <!-- /. NAV TOP  -->
        <?php include('navigation.php');?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>   
                        <h5>Welcome <?php echo $name;?>. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php 
                                $sql1 = "SELECT COUNT(*) FROM users where role = 'chef'";
                                $qry1 = $conn->prepare($sql1);
                                $qry1->execute();
                                $qry1->bind_result($users);
                                $qry1->fetch();
                                $qry1->close();
                            ?>
                            <div class="text-box" >
                                <p class="main-text"><?php echo $users;?><br><br>Chef</p>
                            </div>
                        </div>
		            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-list-alt"></i>
                            </span>
                            <?php 
                                $sql1 = "SELECT COUNT(*) FROM reci_cat";
                                $qry1 = $conn->prepare($sql1);
                                $qry1->execute();
                                $qry1->bind_result($recipe_cat);
                                $qry1->fetch();
                                $qry1->close();
                            ?>
                            <div class="text-box" >
                                <p class="main-text"><?php echo $recipe_cat;?> Category</p>
                            </div>
                        </div>
		            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-cutlery"></i>
                </span>
                <?php 
                                $sql1 = "SELECT COUNT(*) FROM reci_list";
                                $qry1 = $conn->prepare($sql1);
                                $qry1->execute();
                                $qry1->bind_result($recipe_list);
                                $qry1->fetch();
                                $qry1->close();
                            ?>
                <div class="text-box" >
                    <p class="main-text"><?php echo $recipe_list?> Recipe List</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                             
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

    <?php 
         }
        }else {
            echo "no record found";
        }
     ?>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
