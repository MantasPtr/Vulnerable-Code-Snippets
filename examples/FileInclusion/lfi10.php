<?php     include("../common/header.php");   ?>


<form action="/LFI-10/index.php" method="POST">
    <input type="text" name="file">
</form>

<?php
   $file = str_replace('../', '', $_POST['file']);
   if(isset($file))
   {
       include("pages/$file");
   }
   else
   {
       include("index.php");
   }
?>
