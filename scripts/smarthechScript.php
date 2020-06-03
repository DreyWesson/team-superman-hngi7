<?php
function task2($id, $fullname,$language, $email ){
	
	return json_encode("Hello World, this is $fullname with HNGi7 ID $id using $language for stage 2 task $email");
}

echo task2("HNG-03514", "Ebuka John Ede", "PHP", "ebukajohn11@gmail.com");