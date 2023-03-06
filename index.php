<?php
session_start();
require_once('header.php');
?>
<table id="customers">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Faculty</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    $sql="Select * from userinfo";
    $result=mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td>
            <?php 
                echo $row['id'];
            ?>
        </td>
        <td>
            <?php 
                echo $row['name'];
            ?>
        </td>
        <td>
            <?php 
                echo $row['faculty'];
            ?>
        </td>
        <td>
            <?php 
                echo $row['email'];
            ?>
            </td>
        <td>
            <a class="button button-green" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
            <a class="button button-red"  href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
require_once('footer.php');
?>