<?php
require_one('Klasy/user.class.php');

$user = new User('jkowalski' , 'tajneHasło');
/*
if($user->register()) {
    echo "Zarejestrowano poprawnie";
} else {
    echo "Błąd rejestracji użytkownika";
}
*/

if($user->login()) {
    echo "Zalogowano poprawnie";
} else {
    echo "Błędny login lub hasło";
}

?>