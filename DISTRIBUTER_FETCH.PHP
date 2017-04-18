<html>
<body>

<?php
/* This code will make a connection with database */
$con=mysql_connect("pam35.5gbfree.com","pam35_usin","143momdad");

/* Now, we select the database */
mysql_select_db("pam35_dbin");

/* Now we will store the values submitted by form in variable */

$NAME = $_POST['NAME'];

/* Now we will write a query to insert user details into database */
$query="SELECT * FROM 'DISTRIBUTER' WHERE 'NAME'=$NAME ";
$DISTRIBUTER = mysql_query($query);
while($row = mysql_fetch_array($DISTRIBUTER, MYSQL_ASSOC))
{
$ID = $row['ID'];
  $NAME = $row['NAME'];
  $CITY = $row['CITY'];
  $STATE = $row['STATE'];
  $PINECODE = $row['PINECODE'];
$timestamp = $row['timestamp'];
  
  
  $ID = htmlspecialchars($row['ID'],ENT_QUOTES);
  $NAME = htmlspecialchars($row['NAME'],ENT_QUOTES);
  $CITY = htmlspecialchars($row['CITY'],ENT_QUOTES);
  $STATE = htmlspecialchars($row['STATE'],ENT_QUOTES);
  $PINCODE = htmlspecialchars($row['PINCODE'],ENT_QUOTES);
  
  echo " ID: $ID<br />Name: $NAME<br />City: $CITY<br />State: $STATE<br />Pincode: $PINCODE<br />Timestamp: $timestamp";
}

mysql_close($con);
?>

</body>
</html>