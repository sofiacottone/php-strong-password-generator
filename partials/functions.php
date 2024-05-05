<?php
function generatePassword($array, $chars)
{
    $allCharsString = implode($array);
    return substr(str_shuffle($allCharsString), 0, $chars);
}
