<?php

require_once 'connection.php';
$sql = "SELECT * FROM users"; // Replace 'your_table' with your actual table name
$results = mysqli_query($conn, $sql);
foreach ($results as $result) {
?>
<tr>
    <td><?php echo $result['user_id'] ?></td>
    <td><?php echo $result['user_name'] ?></td>
    <td><?php echo $result['user_email'] ?></td>
    <td><a class="btn btn-success" href="#">Update</a></td>
    <td><a class="btn btn-danger" href="#">Delete</a></td>
    
</tr>
<?php
}

?>