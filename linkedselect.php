 <?php  

include 'conn.php';
session_start();

if(isset($_POST["brand_id"])){
	$brand=$_POST["brand_id"];
	$_SESSION['brandid']=$brand;

 ?>

 	  <select name="type" class="top form-control" id="type">
 	  	<option>select type</option>
      	<?php
		         	$query=" SELECT DISTINCT(typeid) FROM code where brandid='$brand'";
		         	$result = mysqli_query($conn, $query);

		         	 while($row = mysqli_fetch_array($result)){
		         	 	$typeid=$row['typeid'];
		         	 	$query2="SELECT  `id`, `type` FROM `type` where id='$typeid' ";
		         	 	$result2 = mysqli_query($conn, $query2);
		         	 	 while($row1 = mysqli_fetch_array($result2)){

		         	 ?> 
		         	 <option value="<?php echo $row1['id']; ?>"><?php echo $row1['type']; ?></option>
		         	 <?php
		         	}
		         	 }
		         	}
		         	?>
        
      </select>

<?php
if(isset($_POST["type_id"])){
	$type=$_POST["type_id"];
	$brand1=$_SESSION['brandid'];	

	?>
		      <label class="labeltop" for="usr">code:</label>
		     <select name="brand" class="top form-control" id="code">
		     	 	  	<option>select code</option>
 
		         	<?php
		         	echo "rawa";
		         	$query="SELECT * FROM `code` where typeid='$type' and brandid='$brand1' ";

		         	$result = mysqli_query($conn, $query);
	
		         	 while($row = mysqli_fetch_array($result)){
		         	 ?> 
		         	 <option value="<?php echo $row['id']; ?>"><?php echo $row['code']; ?></option>
		         	 <?php
		         	 }
		         	}
		         
		         	?>
       
    		  </select>