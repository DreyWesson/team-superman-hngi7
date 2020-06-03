<?php
function task2($id, $fullname,$language ){
	
	return json_encode("Hello World, this is $fullname with HNGi7 ID $id using $language for stage 2 task");
}

echo task2("HNG-03514", "Ebuka John Ede", "PHP");