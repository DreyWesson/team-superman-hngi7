<?php
$name = "Bolanle Ayodeji";
$id = "HNG-04600";
$language = "php";
$email = "abideklove@gmail.com"
$text = "Hello World, this is {$name} with HNGi7 ID {$id} using {$language} for stage 2 task.{email}";
$result = json_encode($text);
echo $result;
?>