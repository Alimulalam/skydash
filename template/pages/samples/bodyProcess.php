<?php
require_once 'connection.php';

$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);
?>

   <h3><?php echo $results['user_name']; ?></h3>

<?php

?>