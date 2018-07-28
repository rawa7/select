<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="#">
	<input type="text" name="Typename">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php

include 'conn.php';
if(isset($_POST['submit'])){
$Typename=$_POST['Typename'];
$query = "INSERT INTO brand (name)
VALUES ('$Typename');";

if(mysqli_query($conn, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}

}
 
?>