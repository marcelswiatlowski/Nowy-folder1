<?php
require_one('class/user.class.php');

$user = new User('jkowalski' , 'tajneHasło');

echo '<pre>';
var_dump($user);
?>