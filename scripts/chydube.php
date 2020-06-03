<?php

//function to generate user infomation.
function identity_generator($name, $id, $language)
{
    return "Hello World, this is ".$name." with HNGi7 ID ".$id." using ".$language." for stage 2 task.";
}

$output = identity_generator("Chidubem Nwankwo","00366","PHP");

echo $output;

?>