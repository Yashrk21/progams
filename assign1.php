<?php

$str = $_POST["s"];

$f1 = $_POST['s1'];

include"ex1A_1_func.php";

switch($f1)
{
    case 1 : vowel($str);
              break;

    case 2 : palindrome($str);
             break;
}
?>