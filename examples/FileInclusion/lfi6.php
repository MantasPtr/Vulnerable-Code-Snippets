<?php     include("../common/header.php");   ?>




<form action="/LFI-6/index.php" method="POST">
    <input type="text" name="page">
</form>

<?php
include($_POST["page"]);
?>
