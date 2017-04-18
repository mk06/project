<html>
<body>

<?php
/* This code will make a connection with database */
$con=mysql_connect("pam35.5gbfree.com","pam35_usin","143momdad");

/* Now, we select the database */
mysql_select_db("pam35_dbin");

/* Now we will store the values submitted by form in variable */

$Vendor_id = $_POST['VENDOR_ID'];

/* Now we will write a query to insert user details into database */
$query="SELECT * FROM 'VENDOR' WHERE 'VENDOR_ID'=$Vendor_id ";
$VENDOR = mysql_query($query);
while($row = mysql_fetch_array($VENDOR, MYSQL_ASSOC))
{
  $Vendorname =$row['VENDORNAME'];
$Vendor_id = $row['VENDOR_ID'];
$Vendingmaterial = $row['VENDONGMATERIAL'];
$Material_id = $row['MATERIAL_ID'];
$Quantity =$row['QUANTITY'];
$Installment =$row['INSTALLMENT'];
$timestamp = $row['timestamp'];
  
  
  $Vendorname = htmlspecialchars($row['VENDORNAME'],ENT_QUOTES);
  $Vendor_id = htmlspecialchars($row['VENDOR_ID'],ENT_QUOTES);
  $Vendingmaterial = htmlspecialchars($row['VENDONGMATERIAL'],ENT_QUOTES);
  $Material_id = htmlspecialchars($row['MATERIAL_ID'],ENT_QUOTES);
  $Quantity = htmlspecialchars($row['QUANTITY'],ENT_QUOTES);
  $Installment = htmlspecialchars($row['INSTALLMENT'],ENT_QUOTES);  
  echo "Vendorname:$Vendorname
Vendor_id:$Vendor_id
Vendingmaterial :$Vendingmaterial 
Material_id :$Material_id 
Quantity:$Quantity
InstallmentTimestamp: $timestamp";
}

mysql_close($con);
?>

</body>
</html>