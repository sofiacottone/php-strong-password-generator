<?php
function generatePassword($chars)
{
    for ($i = 0; $i < $chars; $i++) {
        echo chr(rand(33, 126));
    }
}
