<?php include("includes/admin_header.php");?>
    <!-- Wrapper -->
    <div id="wrapper">

       <!-- Navigation -->
<?php include("includes/admin_navigation.php");?>
       
<div id="page-wrapper">

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
 <?php 
     $query = "SELECT * FROM access";

     $result = mysqli_query($connection, $query);

     while($row = mysqli_fetch_array($result)){
         $id = $row['id'];
        $userName = $row['userName'];    
 ?>
            <h1 class="page-header">
               Welcome 
                <small><?php echo $userName ?></small>
            </h1>
<?php } ?>
            
        </div> 
    </div>
    <!-- /.row -->
    <div class="row">
    <div class="col-lg-6 col-md-6 ">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                            <?php 

                           $query = "SELECT * FROM users";

                           $select_all_users = mysqli_query($connection, $query);

                           $user_count = mysqli_num_rows($select_all_users)

                            ?>
                        <div class='huge'><?php echo $user_count; ?></div>
                        <div>Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


</div>




    
    <!-- Footer
<?php include("includes/admin_footer.php");?>-->
  
