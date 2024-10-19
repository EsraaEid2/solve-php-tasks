<?php

include('../layout/header.php');
require('../conn.php');
?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];;

    $query="SELECT * FROM `crud` WHERE `user_id`=:id";

    $statment=$dbconnection->prepare($query);
    $statment->bindParam(':id',$id,PDO::PARAM_INT);
    $statment->execute();

    $user=$statment->fetch(PDO::FETCH_ASSOC);
    print_r($user);

}

?>

<?php
if(isset($_POST['update_user'])){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $query="UPDATE `crud` SET `user_id`='[value-1]',`user_name`='[value-2]',`user_email`='[value-3]',`user_mobile`='[value-4]',`user_password`='[value-5]' WHERE 1";
    $stmt=$dbconnection->prepare($query);

    $stmt->bindParam(':user_name', $fname);
    $stmt->bindParam(':user_email', $email);
    $stmt->bindParam(':user_mobile', $mobile);
    $stmt->bindParam(':user_password', $password);

    $stmt->execute($stmt);
    header('location:index.php?message=info updated sucessfully');
    }

?>


<div class="container mt-5">
    <form action="update_page.php" method="post">
        <div class="form-group">
            <label for="fname">User Name</label>
            <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname"
                value=<?php echo $user['user_name'];?>>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email"
                value=<?php echo $user['user_email'];?>>
        </div>
        <div class="form-group">
            <label for="mobile">User Mobile</label>
            <input type="text" class="form-control" id="mobile" aria-describedby="mobile" placeholder="mobile" name="mobile"
                value=<?php echo $user['user_mobile'];?>>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="password" value=<?php echo $user['user_password'];?>>
        </div>
        
        <input type="submit" class="btn btn-success" name="update_user" value="UPDATE">
    </form>
</div>

<?php

include('../layout/footer.php');
?>