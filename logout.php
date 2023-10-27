<?php
session_start();
if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
echo "Logged out Successfully";
session_destroy();
header('Location: index.php');
exit;
}
?>