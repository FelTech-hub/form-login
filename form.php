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
    
    <div class="conatinaer">
        <div class="row">
            <div class="col-md-4 mx-auto py-5">
            <div class="card"> 
            <div class="card-header">
                <h3 class="text-info">Register a new membership</h3>   
            </div> 
            <div class="card-body">
                <?php include('./form_login.php') ?>
                <form action="form.php" method="post">
                <div class="form-group mb-3">
                    <label for="firstname" class="mb-3">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="First Name"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="middle name" class="mb-3">Middle Name</label>
                    <input type="text" name="middlename" class="form-control" placeholder="Middle Name"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="lastname" class="mb-3">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="mb-3">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="mb-3">Phone No</label>
                    <input type="phone" name="phone" class="form-control" placeholder="Phone Number"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="gender" class="mb-3">Gender</label>
                   <select name="gender" id="gender" class="form-control">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                   </select>
                </div>
                <div class="form-group mb-3">
                    <label for="address" class="mb-3"></label>
                    <input type="text" name="address" class="form-control" placeholder="Address"  >
                </div>
                <div class="form-group mb-3">
                    <label for="classes" class="mb-3">Classes</label>
                   <select name="classes" id="classes" class="form-control">
                        <option selected></option>
                        <option>PRE KG</option>
                        <option>NURI</option>
                        <option>NURIII</option>
                        <option>NURIV</option>
                        <option>NURV</option>
                        <option>PRYI</option>
                        <option>PRYII</option>
                        <option>PRYIII</option>
                        <option>PRYIV</option>
                        <option>PRYV</option>
                        <option>JSSI</option>
                        <option>JSSII</option>
                        <option>JSSIII</option>
                        <option>SSSI</option>
                        <option>SSSII</option>
                        <option>SSSIII</option>
                   </select>
                </div>
                <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="btn btn-info btn-block">
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