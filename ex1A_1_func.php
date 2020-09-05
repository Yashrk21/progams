<?php

function vowel($s)
{
    $cnt = 0;
    $len = strlen($s);

    $acnt = 0; $ecnt = 0; $icnt = 0; $ocnt = 0; $ucnt = 0; 
    
    for ($i=0; $i < len; $i++) { 
        if($s[$i]=='a')
        {
            $acnt++;
            $cnt++;
        }

        if($s[$i]=='e')
        {
            $ecnt++;
            $cnt++;
        }

        if($s[$i]=='i')
        {
            $icnt++;
            $cnt++;
        }

        if($s[$i]=='o')
        {
            $ocnt++;
            $cnt++;
        }

        if($s[$i]=='u')
        {
            $ucnt++;
            $cnt++;
        }
    }

    echo "Total a = " . $acnt."<br>";
    echo "Total e = " . $ecnt."<br>";
    echo "Total i = " . $ocnt."<br>";
    echo "Total o = " . $icnt."<br>";
    echo "Total u = " . $ucnt."<br>";
}

function palindrome($str)
{
    $cnt = 0;
    $len = strlen(str);

    $n = "";

    for ($i=len-1; $i >= 0 ; $i++) { 
        $n = $n.$str[$i];
    }

    echo "<br>";

    if($n == $str)
        echo "str is palindrome";
    else
        echo "str is not palindrome";
}
?>