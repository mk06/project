<html>
<body>

<?php
/* This code will make a connection with database */
$con=mysql_connect("pam35.5gbfree.com","pam35_usin","143momdad");

/* Now, we select the database */
mysql_select_db("pam35_dbin");

/* Now we will store the values submitted by form in variable */


$Name=$_POST['Name'];
$username=$_POST['username'];
$Dob= date('y/d/m', strtotime($_POST['DOB']));
$emailid = $_POST['emailid'];
$pass=$_POST['password'];
/* we are now encrypting password while using md5() function */
$password=md5($pass);
$confirm_password=$_POST['confirm_password'];


/* now we will check if password and confirm password matched */
if($pass != $confirm_password)
{ echo "Password and confirm password fields were not matched"; }
else {

/* Now we will write a query to insert user details into database */
$insert_user=mysql_query("INSERT INTO register(Name,Username,Dob,emailid,password) VALUES ('$Name','$username','$Dob','$emailid','$pass')");
/*$insert_user=mysql_query("INSERT INTO login(Username,password) VALUES ('$username','$pass')");*/
if($insert_user)
{ echo "Registration Succesfull"; }
else
{ echo "error in registration".mysql_error(); }

/* closing the if else statements */
}

mysql_close($con);
?>

</body>
</html>