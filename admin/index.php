<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body class="bg-secondary">
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto py-5">
            <div class="card"> 
            <div class="card-header">
                <h3 class="text-info">Admin Login</h3>
                <?php include('admin_login.php') ?>   
            </div> 
            <div class="card-body">
                <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="username" class="mb-3">Username</label>
                    <input type="text" name="userName" class="form-control" placeholder="Please Enter Username"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="mb-3">Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Please Enter Password"  class="mb-3">
                </div>
                <div class="form-group">
                <input type="submit" value="Login" name="admin" class="btn btn-info btn-block">
                </div>
                </form>
            </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
            </div>
        </div>
    </div>


    <!-- Jquery & Bootsrap -->
    <script src="./jquery/jquery-3.5.1.min.js"></script>
    <script src="./jquery/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>
</html>