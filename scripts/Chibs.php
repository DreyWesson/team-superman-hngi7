<?php

function stageTwo($name, $id, $language, $email)
{
    $txt = "Hello World, this is $name with HNGi7 ID $id using $language for stage 2 task.$email";
    echo $txt;
}

// Vars
$name = "Dennis Chibuike";
$id = "HNG-05217";
$email = "richarddennis789@gmail.com";
$language = "PHP";

$result = stageTwo($name, $id, $language, $email);