<?php

include "config.php";

session_start();  

?>

<h3>Welcome</h3> 
<br>
<h2 style="color: red;"><?php echo $_SESSION['myname']; ?></h2>