<html>
<body>

<?php
/* This code will make a connection with database */
$con=mysql_connect("pam35.5gbfree.com","pam35_usin","143momdad");

/* Now, we select the database */
mysql_select_db("pam35_dbin");
/* Now we will store the values submitted by form in variable */


$Id =$_POST['id'];
$Name = $_POST['name'];
$City = $_POST['city'];
$State = $_POST['state'];
$Pincode=$_POST['pin'];

/* Now we will write a query to insert user details into database */
$insert_user=mysql_query("INSERT INTO distributer (ID,NAME,CITY,STATE,PINCODE) VALUES ('$Id', '$Name','$City','$State','$Pincode')");

if($insert_user)
{ echo "DISTRIBUTER DETAILS HAVE BEEN STORED SUCCESSFULLY"; }
else
{ echo "error in STORING DETAILS".mysql_error(); }

mysql_close($con);
?>

</body>
</html>