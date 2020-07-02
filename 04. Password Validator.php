<?php

function isLongBetween6_10($text)
{
    $length = strlen($text);
    $bool = 6 <= $length && $length <= 10;
    return $bool;
}

function isConsistsOnlyOfLettersAndDigits($text)
{
    $bool = ctype_alnum($text);
    return $bool;
}

function haveAtLeast2Digits($text)
{
    $length = strlen($text);
    $digitCount = 0;

    for ($i = 0; $i < $length; $i++) {
        $char = $text[$i];
        if (ctype_digit($char)){
            $digitCount++;
        }
    }

    $bool = $digitCount >= 2;
    return $bool;
}


function passwordValidator($password)
{
    $isValid = true;

    if (!isLongBetween6_10($password)) {
        $isValid = false;
        echo "Password must be between 6 and 10 characters".PHP_EOL;
    }

    if (!isConsistsOnlyOfLettersAndDigits($password)) {
        $isValid = false;
        echo "Password must consist only of letters and digits".PHP_EOL;
    }

    if (!haveAtLeast2Digits($password)) {
        $isValid = false;
        echo "Password must have at least 2 digits".PHP_EOL;
    }

    if ($isValid) {
        echo "Password is valid";
    }
}

passwordValidator(readline());
