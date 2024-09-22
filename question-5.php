<?php
function isValidEmail($email)
{
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email) === 1;
}

$email1 = "contoh@example.com";
if (isValidEmail($email1)) {
    echo "$email1 adalah alamat email yang valid.<br>";
} else {
    echo "$email1 bukan alamat email yang valid.<br>";
}
