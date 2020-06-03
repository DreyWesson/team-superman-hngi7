<?php
/*
"Hello World, this is [FULL NAME] with HNGi7 ID [NHGID] using [LANGUAE] for stage 2 task.[EMAIL]"
*/
//Assign JSON encode sring to a php variable
$json ='{"fullname":"Olagoke Abel Olayinka", "id":"HNG-01002", "language":"PHP", "email":"olagokeabel@gmail.com"}';
//

//Decode JSON Data to PHP associative array;
$data =json_decode($json, true);


// output the task statement
$output= "Hello World, this is ".$data['fullname']. " with HNGi7 ID ".$data['id']. " using ".$data['language']." for stage 2 task.".$data['email'];
echo($output);

?>

