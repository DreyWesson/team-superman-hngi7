<?php

 //function to desplay intern detials
 function intern($name, $id, $pro_lang, $email)
 {
     return "Hello World, this is ".$name. " with HNGi7 id ".$id. " using ".$pro_lang." for stage 2 task.".$email;
 }

 $output = intern("Chidubem Nwankwo", "HNG-00366","PHP","Dubem360@gmail.com");

 echo $output;
