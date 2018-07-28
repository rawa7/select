
<?php
include 'conn.php';

?>
<form method="POST" action="#">
	

<div class="form-group">
			   <label class="labeltop" for="usr">brand:</label>
		         <select name="brand" class="top form-control" id="sel1">
		         	<?php
		         	$query="SELECT `id`, `name` FROM `brand`";
		         	$result = mysqli_query($conn, $query);

		         	 while($row = mysqli_fetch_array($result)){
		         	 ?> 
		         	 <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
		         	 <?php
		         	 }
		         	?>
       
    		  </select>
		   	      <label class="labeltop" for="usr">type</label>
		  		  <select name="type" class="top form-control" id="sel1">
      	<?php
		         	$query="SELECT `id`, `type` FROM `type`";
		         	$result = mysqli_query($conn, $query);

		         	 while($row = mysqli_fetch_array($result)){
		         	 ?> 
		         	 <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
		         	 <?php
		         	 }
		         	?>
        
      </select>
		      <label class="labeltop" for="usr">code:</label>
		      <input name="code" type="text" class="top form-control" id="usr">
		      <input type="submit" name="submit">
		      </form>
<?php



	if (isset($_POST['submit'])) {

		echo " brand ".$brand=$_POST['brand']; echo "<br>";
		echo " type ".$type=$_POST['type']; echo "<br>";
		echo " code ".$code=$_POST['code']; echo "<br>";
		$query = "INSERT INTO `code`(`brandid`, `typeid`, `code`) 
		VALUES ('$brand','$type','$code');";

		if(mysqli_query($conn, $query)){
		    echo "Records inserted successfully.";
		} else{
		    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
		}

	}
?>