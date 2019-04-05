<?php
session_start();
include("includes/config.php");
if( isset($_SESSION['userlogin'])){
session_unset();
session_destroy();
}


?>
<script language="javascript">
    document.location = "login.php";
</script>

