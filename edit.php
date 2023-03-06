<?php
session_start();
require_once('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM userinfo WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="" method="POST">
            <br><br>
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <br><br>
    Email <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <br><br>
    Faculty:
    <select name="faculty" >
        <option value="Management"
        <?php
echo $row['faculty'] == 'Management' ? 'selected="selected"' : '';
?>
        >Management</option>
        <option value="Science"
        <?php
echo $row['faculty'] == 'Science' ? 'selected="selected"' : '';
?>
        >Scinece</option>
    </select>
    <br><br>
    Password <input type="password" name="password" value="<?php echo $row['password']; ?>">
    <br><br>
    <button  class="button button-green"  name="submit">Edit Student</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $faculty = $_POST['faculty'];
    $sql = "UPDATE `userinfo` SET `name`='$name',`email`='$email',
        `password`='$password',`faculty`='$faculty' WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Unable to create edit account";
    }
}
?>

<?php
require_once 'footer.php';
?>