<?php  
 //logout.php  
 session_start();  
 session_destroy();  
 header("location:register.php?action=login");  
 ?> 