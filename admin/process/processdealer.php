<?php require_once '../config/conf.php'; ?>
<?php



// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM users WHERE user_id = '$id'");
echo '
  
<div class="row">       
';

while ($row = mysqli_fetch_array($sql)) {
    echo '
       <p> '. $row['user_name'] .' </p> 
<form class="button" action="process/makedealer.php"  method="post">
    <input type="hidden" name="id" value="' . $id . '" />
    <button type="submit" value="submit" name="submit" >Make dealer?</button>
</form>
';
}
?>


