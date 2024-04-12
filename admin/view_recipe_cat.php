<?php 
    include('check_user.php');
    require_once('../db/db_connection.php');
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $sql = "DELETE FROM reci_cat WHERE id=?";
        $qry = $conn->prepare($sql);
        $qry->bind_param('i',$id);
        $qry->execute();
        $qry->close();
        if ($qry) {
            echo "<script>alert('Recipe Category Deleted')</script>";
        }else {
            echo "<script>alert('Please Check your connection')</script>";
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Recipe Category : Chrislaw Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             View Recipe Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $sql = "SELECT * FROM reci_cat";
                                      $qry = $conn->prepare($sql);
                                      $qry->execute();
                                      $res = $qry->get_result();
                                      $cnt = 1;
                                      while ($row=$res->fetch_object()) {
                                        ?>
                                      
                                        <tr>
                                            <td><?php echo $cnt++?></td>
                                            <td><?php echo $row->recipe_cat?></td>
                                            <td class="center">
                                                <a href="view_recipe_cat.php?del=<?php echo $row->id?>"><button class="btn btn-danger"><i class="fa fa-trash-o"> Delete</i></button></a>
                                                <a href="update_recipe_cat.php?edit=<?php echo $row->id?>"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a>
                                            </td>
                                            
                                        </tr>
                                        <?php }
                            ?>
                                    </tbody>
                                </table>
                            
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>     
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
