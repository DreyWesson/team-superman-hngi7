<?php

/* 
 i will be using a function to execute

 */

 function messageTask($fullName, $id, $language){
   $output= json_encode("Hello World, this is $fullName with HNGi7 ID $id using $language for stage 2 task.") ;

   echo $output ;

 }

 messageTask("Agboola Sola", "HNG-04047", "PHP");
?>