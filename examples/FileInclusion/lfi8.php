<?php     include("../common/header.php");   ?>


<form action="/LFI-8/index.php" method="POST">
    <input type="text" name="file">
</form>


<?php
if (substr($_POST['file'], -4, 4) != '.php')
 echo file_get_contents($_POST['file']);
else
 echo 'You are not allowed to see source files!'."\n";
?>

