<?php
    if($_POST[1]=="admin")
    {
        if($_POST[2]=="admin@1234"){
            header('Location:admin.php');
    }
    else echo "Incorrect password go back and try again";
}
else echo "Incorrect username";
?>
            