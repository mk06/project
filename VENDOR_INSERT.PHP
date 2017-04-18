<html>
<body>

<?php
/* This code will make a connection with database */
$con=mysql_connect("pam35.5gbfree.com","pam35_usin","143momdad");

/* Now, we select the database */
mysql_select_db("pam35_dbin");
/* Now we will store the values submitted by form in variable */


$Vendorname =$_POST['VENDORNAME'];
$Vendor_id = $_POST['VENDOR_ID'];
$Vendingmaterial = $_POST['VENDONGMATERIAL'];
$Material_id = $_POST['MATERIAL_ID'];
$Quantity=$_POST['QUANTITY'];
$Installment =$_POST['INSTALLMENT'];

/* Now we will write a query to insert user details into database */
$insert_user=mysql_query("INSERT INTO VENDOR (VENDORNAME,VENDOR_ID,VENDINGMATERIAL,MATERIAL_ID,QUANTITY,INSTALLMENT) VALUES ($Vendorname,'$Vendor_id', '$Vendingmaterial','$Material_id','$Quantity','$Installment')");

if($insert_user)
{ echo "VENDOR DETAILS HAVE BEEN STORED SUCCESSFULLY"; }
else
{ echo "error in STORING DETAILS".mysql_error(); }

mysql_close($con);
?>

</body>
</html>