<?php
echo " brand ".$brand=$_POST['brand']; echo "<br>";
echo " type ".$type=$_POST['type']; echo "<br>";
echo " code ".$code=$_POST['code']; echo "<br>";
echo " date ".$date=$_POST['date']; echo "<br>";
echo " price ".$price=$_POST['price']; echo "<br>";
echo " quantity ".$quantity=$_POST['quantity']; echo "<br>";
echo "quantityofContainer".$quantityofContainer=$_POST['quantityofContainer']; echo "<br>";
echo " moreinfo ".$moreinfo=$_POST['moreinfo']; echo "<br>";
echo " factory ".$factory=$_POST['factory']; echo "<br>";
echo " Mfactory ".$Mfactory=$_POST['Mfactory']; echo "<br>";
echo " custom ".$custom=$_POST['custom']; echo "<br>";
echo " Mcustom ".$Mcustom=$_POST['Mcustom']; echo "<br>";
echo " port ".$port=$_POST['port']; echo "<br>";
echo " Mport ".$Mport=$_POST['Mport']; echo "<br>";
echo " other ".$other=$_POST['other']; echo "<br>";
echo " Mothers ".$Mothers=$_POST['Mothers']; echo "<br>";
echo " SGS ".$SGS=$_POST['SGS']; echo "<br>";
echo " Msgs ".$Msgs=$_POST['Msgs']; echo "<br>";
echo " Clearance ".$Clearance=$_POST['Clearance']; echo "<br>";
echo " Mclearance ".$Mclearance=$_POST['Mclearance']; echo "<br>";
echo " totalExpense ".$totalExpense=$_POST['totalExpense']; echo "<br>";
echo " expenseperunit ".$expenseperunit=$_POST['expenseperunit']; echo "<br>";
echo " pricewithoutprofit ".$pricewithoutprofit=$_POST['pricewithoutprofit']; echo "<br>";
echo " operating ".$operating=$_POST['operating']; echo "<br>";
echo " discount ".$discount=$_POST['discount']; echo "<br>";
echo " profit ".$profit=$_POST['profit']; echo "<br>";
echo " totalPrice ".$totalPrice=$_POST['totalPrice']; echo "<br>";
echo " price1 ".$price1=$_POST['price1']; echo "<br>";
echo " Mprice1 ".$Mprice1=$_POST['Mprice1']; echo "<br>";
echo " price2 ".$price2=$_POST['price2']; echo "<br>";
echo " Mprice2 ".$Mprice2=$_POST['Mprice2']; echo "<br>";
echo " price3 ".$price3=$_POST['price3']; echo "<br>";
echo " Mprice3 ".$Mprice3=$_POST['Mprice3']; echo "<br>";


include 'conn.php';

?>
</hr>
</br>
</hr>
<hr>
<?php

	




$query="INSERT INTO `item`(`codeid`, `seaFreight`, `aboutSeaFreight`, `custom`, `aboutCustom`, `transport`, `aboutTransport`, `customClearence`, `aboutCustomClearance`, `others`, `aboutOthers`, `SGS`, `aboutSGS`, `totalExpense`, `operatingE`, `Discount`, `quantity`, `quantityOfContainer`, `info`, `date`, `bounse`, `total`, `price`, `expenseperunit`, `pricewithoutprofit`, `price1`, `price2`, `price3`, `Mprice1`, `Mprice2`, `Mprice3`) VALUES ('$code','$factory','$Mfactory','$custom','$Mcustom','$port','$Mport','$Clearance','$Mclearance','$other','$Mothers','$SGS','$Msgs','$totalExpense','$operating','$discount','$quantity','$quantityofContainer','$moreinfo','$date','$profit','$totalPrice','$price','$expenseperunit','$pricewithoutprofit','$price1','$price2','$price3','$Mprice1','$Mprice2','$Mprice3');";

if(mysqli_query($conn, $query)){
    echo "</br><hr>items inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}


?>