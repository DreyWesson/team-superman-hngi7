<?php
//Assign JSON encode sring to a php variable
$json ='{"fullname":"Olagoke Abel Olayinka", "id":"HNG-01002", "language":"php"}';
//

//Decode JSON Data to PHP associative array;
$data =json_decode($json, true);

// output the task statement
echo "Hello world, this is ". $data["fullname"]. " with HNGi7 ID ".$data["id"]. " using ". $data["language"]. " for stage 2 task.";
?>
