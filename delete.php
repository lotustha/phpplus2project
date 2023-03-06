<?php
require_once('header.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM userinfo WHERE id='$id'";
    $result=mysqli_query($connect,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
      $row=mysqli_fetch_assoc($result);
        ?>
        <div class="center">
        <p>Name: <?php echo $row['name'];?></p>
        <p>Email: <?php echo $row['email'];?></p>
        <p>Faculty: <?php echo $row['faculty'];?></p>
        <p><b>Do You Want TO Delete This Record?</b></p>
        <form method="post">
        <input class="button button-red" type="submit" name="confirm" value="Yes, Delete">
        <a class="button button-green" href="index.php">No, Cancel</a>
        </form>
        </div>
        
        <?php
        if(isset($_POST['confirm'])){
            $sql="DELETE FROM userinfo WHERE id='$id'";
            $result=mysqli_query($connect,$sql);
            if ($result) {
                header("Location: index.php");
            } else {
                echo "Unable to delete account";
            }
        }
    }else{
        ?>
        <h2>No Record Found</h2>
        <?php
    }
}

require_once('footer.php');
?>