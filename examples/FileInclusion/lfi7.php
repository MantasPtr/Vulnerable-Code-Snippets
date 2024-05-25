<?php     include("../common/header.php");   ?>




<form action="/LFI-7/index.php" method="POST">
    <input type="text" name="library">
</form>

<?php
include("includes/".$_POST['library'].".php"); 
?>

