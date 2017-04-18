<html>
<body>
<?php
/* This code will make a connection with database */
$con=mysql_connect("pam35.5gbfree.com","pam35_usin","143momdad");

/* Now, we select the database */
mysql_select_db("pam35_dbin");


/* Now we will store the values submitted by form in variable */


$username=$_POST['Username'];
$PASSWORD = $_POST['password'];
/* we are now encrypting password while using md5() function */
$Pass=md5($PASSWORD);

$sql="SELECT Username,password FROM register WHERE Username='$username'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysql_fetch_assoc($result);
    if (crypt($PASSWORD, $row['password']) == $row['password']){
        session_register("Username");
        session_register("password"); 
        echo "Login Successful";
        return true;
    }
    else {
        echo "Wrong Username or Password";
        return false;
    }
}
else{
    echo "Wrong Username or Password";
    return false;
}

mysql_close($con);
?>

</body>
</html>