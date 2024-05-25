<?php 
class login {
  public $username = "X-C3LL";
  public $password = "InsanitY778!::d";
  public $role = "MUGGLE";
}
$one = new login();
$a = serialize($one);
echo "Example of an object:\n$a\n\n";
echo "FLAG: \n";
$test = unserialize($argv[1]);
$check = $test->role;
if ($check == "ADMIN") {
  $flag = file_get_contents("secret.txt");
  echo $flag;
} else {
  echo "Access denied\n";
}
?>
