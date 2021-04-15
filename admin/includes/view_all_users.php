<?php 
    ob_start();

?>
<table class="table table-bordered table-hover ">
    <thead>
        <tr class="text-center">
            <th class="text-center">First Name</th>
            <th class="text-center">Middle Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone No</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Address</th>
            <th class="text-center">Classes</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>

        </tr>
    </thead>
    <tbody>
<?php 
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($result)){

    $id = $row['id'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $address = $row['address'];
    $classes = $row['classes'];
?>
        <tr>
            <td class="text-center"><?php echo $firstname ?></td>
            <td class="text-center"><?php echo $middlename ?></td>
            <td class="text-center"><?php echo $lastname ?></td>
            <td class="text-center"><?php echo $email ?></td>
            <td class="text-center"><?php echo $phone ?></td>
            <td class="text-center"><?php echo $gender ?></td>
            <td class="text-center"><?php echo $address ?></td>
            <td class="text-center"><?php echo $classes ?></td>
            <td class="text-center"><a href="users.php?source=edit_user&edit_user=<?php echo $id ?>">Edit</a></td>
            <td class="text-center"><a href="users.php?delete=<?php echo $id ?>">Delete</a></td>
        </tr>
    </tbody>
    <?php } ?>
</table>

<!-- Delete -->

<?php 
      if(isset($_GET['delete'])){
        $the_user_id = $_GET['delete'];
        
        $query = "DELETE FROM users WHERE  id = {$the_user_id}";
        $delete_user = mysqli_query($connection, $query);
        header("Location:users.php");
        
    }

?>





