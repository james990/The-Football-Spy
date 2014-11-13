<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
<br />
Return <a href="index.html">Home</a>
</body>
</html>