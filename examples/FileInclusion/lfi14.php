<!-- from https://github.com/ewilded/psychoPATH -->
<?php     include("../common/header.php");   ?>


<form action="/LFI-14/index.php" method="POST">
    <input type="text" name="file">
    <input type="hidden" name="style" name="stylepath">
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
