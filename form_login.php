<?php 
    include('config.php');

    if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $classes = $_POST['classes'];

      $firstname = htmlspecialchars(filter_var($firstname, FILTER_SANITIZE_STRING));
        $middlename = htmlspecialchars(filter_var($middlename, FILTER_SANITIZE_STRING));
      $lastname = htmlspecialchars(filter_var($lastname, FILTER_SANITIZE_STRING));
       $email = htmlspecialchars(filter_var($email, FILTER_SANITIZE_EMAIL));
       $phone = htmlspecialchars(filter_var($phone, FILTER_SANITIZE_STRING));
       $gender = htmlspecialchars(filter_var($gender, FILTER_SANITIZE_STRING));
       $address = htmlspecialchars(filter_var($address, FILTER_SANITIZE_STRING));
       $classes = htmlspecialchars(filter_var($classes, FILTER_SANITIZE_STRING));


     


       if(empty($firstname) && empty($middlename) && empty($lastname) && empty($email) && empty($phone) && empty($gender) && empty($address) && empty($classes)){
           echo "<p class='alert alert-danger'>Field cannot be empty</p>";
       } else {

           $query = "INSERT INTO users(firstname, middlename, lastname,email,phone,gender,address,classes)  VALUES ('{$firstname}', '{$middlename}', '{$lastname}', '{$email}', '{$phone}', '{$gender}', '{$address}', '{$classes}') ";

           $result = mysqli_query($connection, $query);

           if(!$result){
               echo "Query Failed" . mysqli_error($connection);
           }
           echo "<p class='alert alert-success'>Recoard Saved<p>";
       }
    }
?>