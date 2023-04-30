<?php
ob_start();
 session_start();
 session_destroy();
 echo '<script>alert("logged out successfully")</script>';
 header("Location:index.php");
 ob_end_flush();
 ?>