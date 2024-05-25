<?php     include("../common/header.php");   ?>



<form action="/LFI-4/index.php" method="GET">
    <input type="text" name="class">
</form>

<?php
include('includes/class_'.addslashes($_GET['class']).'.php');
?>

