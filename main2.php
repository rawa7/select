	<?php
include 'conn.php';

	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>dal Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
  	label{
  		width: 130px;
  		
  		text-align: center;
  		margin: 1px;
  		margin-top: 5px;
  		text-align: center;
  		font-size: 14px;
  		text-align: center;
  		
  	}
  		.labeltop{
  		width: auto;
  		float: none;
  		margin-top: 0px;


  	}

  	.form-group{
  		margin-top: 0px;
  		margin-bottom:5px;
  		margin: auto;
  	}

  	.form-control2{
  		width: 350px;
  		padding: 8px 16px;
  		margin: 1px;
  		border: 1px solid black;
  		border-radius: 4px;
  		box-sizing: border-box;
  		display: inline-block;
  	}

	.L{
		width: 110px;
	  	display: inline-block;
	  	margin: 0px;
	  	position: relative;
	  	top: 0px;
	  	left: 0px;
	  	 
	}
  	fieldset{
  		border-radius: 5px;
  		background-color: lightblue;
  		padding: 20px;
  		border: 1px solid green;
  		margin: auto;
  		width: 550px;

  	}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

  .top{
  	width: 200px;
  	display: inline;
  	margin-top: 2px;
  }

.topinfo{
	width: 400px;
  	display: inline;
  	margin-top: 2px;
}


.ri{
	width: 110px;
  	display: inline-block;
  	margin: 0px;
  	position: relative;
  	top: 0px;
  	left: 0px;
}

.R{
	width: 250px;
}

.col-sm-6{
	width: %80;
	margin: 0px;
	padding: 0px;
}


</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">new brand</a></li>
        <li><a href="#">new type</a></li>
        <li><a href="#">price selection</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<form action="main1.php" method="POST">
	

<div id="myCarousel" class="carousel slide" data-ride="carousel">
 		    
    <div class="carousel-inner" role="listbox">
		<div class="form-group">
			   <label class="labeltop" for="usr">brand:</label>
		         <select name="brand" class="top form-control" id="brand">
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
		  		  <select name="type" class="top form-control" id="type">
      	
		         	 <option value="">select type</option>
		         	 
        
      </select>
		      <label class="labeltop" for="usr">code:</label>
		     <select name="code" class="top form-control" id="code">
		         	
		         	 <option value="">select code</option>
		         	
       
         </select>
		      <label class="labeltop" for="usr">date:</label>
		      <input name="date" type="date" class=" top form-control" id="usr" value="<?php echo date('Y-m-d'); ?>">
		  </div>
		      <div class="form-group">	
		      	  <label class="labeltop" for="usr">price:</label>
		      <input name="price" step=0.001 type="number" class="price top form-control" id="usr">
		      <label class="labeltop" for="usr">quantity:</label>
		      <input name="quantity" step=0.001 type="number" class="quantity top form-control" id="usr">
		      <label class="labeltop" for="pwd">quantityofContainer:</label>
		      <input name="quantityofContainer" step=0.001 type="number" class="top form-control" id="pwd">
		      <label class="labeltop" for="pwd">more info:</label>
		      <input name="moreinfo" type="text" class="topinfo form-control" id="usr">
		</div>
		
	
		

    </div>
</div>
  
<div class="container text-center">    
  </hr>
  <div class="row">
    <div class="col-sm-6">
    	
    	<fieldset>
    		
      		<div class="form-group">
		     <label >factory to port:</label>
		      <input name="factory" step=0.001 type="number" class="L form-control2">
		      <input name="Mfactory" type="text" class="R form-control2">
		      	</div>
		    
		      	<div class="form-group">
		     <label >custom:</label>
		     <input name="custom" step=0.001 type="number" class="L form-control2" >
		     <input name="Mcustom" type="text" class="R form-control2">

		      	</div>
		      
      		<div class="form-group">
		     <label >Port to Iraq</label>
		     <input name="port" step=0.001 type="number" class="L form-control2" >
		     <input name="Mport" type="text" class="R form-control2">
		      	</div>
		    
		   	<div class="form-group">
		        <label>others:</label>
		        <input name="other" step=0.001 type="number" class="L form-control2" >
		    	<input name="Mothers" type="text" class="R form-control2">

		   	</div>
		      
		    <div class="form-group">
		      <label >SGS:</label>
		      <input name="SGS" step=0.001 type="number" class="L form-control2" >
		      <input name="Msgs" type="text" class="R form-control2">
			</div>

			<div class="form-group">
		    <label >custom Clearance:</label>
		    <input name="Clearance" step=0.001 type="number" class="L form-control2" >
		    <input name="Mclearance" type="text" class="R form-control2">
			</div>
      			<div class="form-group">
			     <label>Total expense:</label>
			      <input name="totalExpense" step=any  type="number" class="resul form-control2" id="result">
			       <label>unit expense:</label>
			      <input name="expenseperunit" step=any  type="number" class="form-control2" id="result2">
			       <label>total price:</label>
			      <input name="pricewithoutprofit" step=any  type="number" class="form-control2" id="result3">
		      	</div>
				
    		</fieldset>
		
    </div>
    <div class="col-sm-6"> 
     	<fieldset>
    		
      		<div class="form-group">
		     <label>operating</label>
		      <input name="operating" step=0.001 type="number" class="operating Ri form-control2">
		     
		      	</div>
		    
		      	<div class="form-group">
		     <label >discount:</label>
		     <input name="discount" step=0.001 type="number" class="Ri form-control2" >


		      	</div>
		      
		    <div class="form-group">
		     <label >profit:</label>
		     <input name="profit" step=0.001 type="text" class="Bounse Ri form-control2" >

			</div>
		
      		<div class="form-group">
			  <label>Total:</label>
			    <input name="totalPrice" step=any  type="number" class=" form-control2" id="result4">
			    
		      </div>
				
    		</fieldset>
        <fieldset>
        		<div class="form-group">
		     <label >price1</label>
		      <input name="price1" step=0.001 type="number" class="Ri form-control2">
		      <input name="Mprice1" type="text" class="R form-control2">
		     
		      	</div>
		    
		      	<div class="form-group">
		     <label >price2</label>
		     <input name="price2" step=0.001 type="number" class="Ri form-control2" >
		     <input name="Mprice2" type="text" class="R form-control2">


		      	</div>
    	   		<div class="form-group">
		      <label >price3</label>
		      <input name="price3" step=0.001 type="number" class="Ri form-control2">
		      <input name="Mprice3" type="text" class="R form-control2">
       	</fieldset>
    </div>

  </div>
</div><br>

<footer class="container-fluid text-center">
  <input type="submit" name="submit" class="submit">
</form>
</footer>




















//scripts are here
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

//for auto update select list linked

$(document).ready(function(){
    $('#brand').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'linkedselect.php',
                data:'brand_id='+countryID,
                success:function(html){
                    $('#type').html(html);
                    $('#code').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#type').html('<option value="">Select country first</option>');
            $('#code').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#type').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'linkedselect.php',
                data:'type_id='+stateID,
                success:function(html){
                    $('#code').html(html);
                }
            }); 
        }else{
            $('#code').html('<option value="">Select state first</option>'); 
        }
    });
});



//for expense +s
	$('.form-group').on('input','.L',function() {
			var totalsum=0;
			$('.form-group .L').each(function() {
				var inputval = $(this).val();
				if ($.isNumeric(inputval)) {
					totalsum += parseFloat(inputval);
				}
			});
				$('#result').val(totalsum);
		});

//for expense
	$('.form-group').on('input',function() {
			var re1=0;
			var re2=0;
			var re=0;
			var re3=0;
			var re5=0;
			var re6=0;
			
				$('.form-group .resul').each(function() {
				var inputquantity=$(this).val();
				if ($.isNumeric(inputquantity)) {
					re2 += parseFloat(inputquantity);
				}
			});
			$('.form-group .quantity').each(function() {
				var inputexpense=$(this).val();
				if ($.isNumeric(inputexpense)) {
					re1 += parseFloat(inputexpense);
				}
			});

			$('.form-group .price').each(function() {
				var inputexpense=$(this).val();
				if ($.isNumeric(inputexpense)) {
					re3 += parseFloat(inputexpense);
				}
			});

		
		
				re=re2/re1;
				$('#result2').val(re);

				re4=re3+re;
				$('#result3').val(re4);
			
		});


//forbounse
	$('.form-group').on('input',function() {
		var bounse=0;
			var operating=0;
			$('.form-group .operating').each(function() {
				var inputquantity=$(this).val();
				if ($.isNumeric(inputquantity)) {
					operating = parseFloat(inputquantity)/100;
				}
			});
			$('.form-group .bounse').each(function() {
				var inputexpense=$(this).val();
				if ($.isNumeric(inputexpense)) {
					bounse = parseFloat(inputexpense)/100;
				}
			});
			var totalprice=re4;
			re6=operating*totalprice;
			re8=re6+totalprice;
			re5=bounse*re8;
			re7=re6+re5+totalprice;
				$('#result4').val(re7);
		});

</script>
</body>
</html>