<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="#">
	<input type="text" name="brandname">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php

include 'conn.php';
if(isset($_POST['submit'])){
$brandName=$_POST['brandname'];
$query = "INSERT INTO type (type)
VALUES ('$brandName');";

if(mysqli_query($conn, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}

}
 
?>