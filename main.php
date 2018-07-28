<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		output{
			font-size: 80px;
			background-color: red;
		}
	</style>
	<script src="jquery-3.3.1.min.js"></script>

</head>
<body>
	<div class="form-group">
		<td><input type="number" class="prc"></td>
	</div>	
	<div class="form-group">
		<td><input type="number" class="prc"></td>
	</div>
	<div class="form-group">	
		<td><input type="number" class="prc"></td>
	</div>
	<div class="result">
		<td><input id="result" class="result" type="text"> </td>
	</div>
			<hr>
	<div class="baxom">
		<form action="a.php" method="POST">
		<input type="number" class="expense">
		<input type="number" class="quantity">
		<input id="re" name="rawa" class="result" type="text"> 
		<input type="submit" name="submit">
		</form>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		$('.baxom').on('input',function() {
			var re1=0;
			var re2=0;
			var re=3;
				$('.baxom .quantity').each(function() {
				var inputquantity=$(this).val();
				if ($.isNumeric(inputquantity)) {
					re2 += parseFloat(inputquantity);
				}
			});
			$('.baxom .expense').each(function() {
				var inputexpense=$(this).val();
				if ($.isNumeric(inputexpense)) {
					re1 += parseFloat(inputexpense);
				}
			});
		
				re=re1+re2;
				$('#re').val(re);
		});
	</script>

	<script>
		$('.form-group').on('input','.prc',function() {
			var totalsum=0;
			$('.form-group .prc').each(function() {
			
				var inputval = $(this).val();

				if ($.isNumeric(inputval)) {
					totalsum += parseFloat(inputval);


				}
			});
				$('#result').val(totalsum);
		});
	</script>



	
</body>
</html>
