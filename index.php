<?php
require_one('Klasy/user.class.php');

$user = new User('jkowalski' , 'tajneHasło');

echo '<pre>';
var_dump($user);
?>