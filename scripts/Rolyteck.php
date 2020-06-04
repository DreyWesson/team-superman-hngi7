
<?php

 //function to display intern details
 function intern($name, $id, $pro_lang, $email)
 {
     return "Hello World, this is ".$name. " with HNGi7 id ".$id. " using ".$pro_lang." for stage 2 task.".$email;
 }

 $output = intern("Roland Blessing", "HNG-02628","PHP","Rolyconsult@gmail.com");

 echo $output;
