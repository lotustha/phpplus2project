<?php
require_once('header.php');
?>
<form action="" method="POST">
            <br><br>
    Name: <input type="text" name="name">
    <br><br>
    Faculty:
    <select name="faculty">
        <option value="Management">Management</option>
        <option value="Science">Scinece</option>
    </select>
    <br><br>
    Email <input type="email" name="email">
    <br><br>
    Password <input type="password" name="password">
    <br><br>
    <button name="submit">Add Student</button>
</form>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $faculty=$_POST['faculty'];
    $sql="INSERT INTO `userinfo`(`name`, `email`, `faculty`, `password`)
     VALUES ('$name','$email','$faculty','$password')";
     $result=mysqli_query($connect,$sql);
    if($result){
        header("Location: index.php");
    }else{
        echo "Unable to create new account";
    }
}
?>

<?php
require_once('footer.php');
?>