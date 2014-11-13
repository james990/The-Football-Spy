<head>
<link rel="stylesheet" type="text/css" href="StyleSheet.css">

</script>
<?php

$host="mysql6.000webhost.com"; // Host name 
$username="a7349877_James"; // Mysql username 
$password="wardy900"; // Mysql password 
$db_name="a7349877_Users"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['james']; 
$mypassword=$_POST['1111']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:index.html");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>

</script>
<html>
</head>
<body id="body">

<div id="top_split">
<div  id="image_div">
</div>
</div>

<div id="bottom_split">


<table id="log_table" width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr id="table_text">
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="">
<tr id="table_text"> 
<td colspan="3"><strong> </strong></td>
</tr>
<tr id="table_text">
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr id="table_text">
<td>Password</td>
<td>:</td>
<td><input id="mypassword" name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td id="sub"><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</body>
<html>