<?php     include("../common/header.php");   ?>

<form action="/CMD-2/index.php" method="POST">
    <input type="text" name="cmd">
</form>

<?php
    system($_POST["cmd"]);
 ?>