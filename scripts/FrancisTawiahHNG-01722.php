<?php

	$username = "FRANCIS TAWIAH";
	$intern_id = "HNG-01722";
	$language  = "PHP";


	if($username == 'FRANCIS TAWIAH' && $intern_id == 'HNG-01722' && $language == 'PHP')
	{
		$message = "Hello World, this is ".$username." with HNi7 ID,  ".$intern_id." using ".$language;
		$read_message = json_encode($message);

		echo $read_message;
	}

	else
	{
		echo "Username does not exist";

	}

?>
