<!DOCTYPE html>
<html>
<head>
<title>Hello, World! Page</title>
</head>
<body>

<?php

// Create a git repository. Make a single file called index.php. This file will run exec on every single file in the folder scripts. 
//It will read the output of that file, and out the pass or fail status of that script. 
//The script passes if it returns the text "Hello World, this is [full name] with HNGi7 ID [ID] using [language] for stage 2 task". Otherwise it fails.
// Everyone in your team is to commit a file to the scripts repository that simply returns the text above
// If your file is called in this format index.php?json, it should output the above as valid JSON. Otherwise it should return basic html.
// Your output should be 'streamed' - i.e flush
// Test it on a server your team comes up with. When the team is done, tell us and the mentors will pull the repo and run it on our server. It has to run perfectly.
// We will use the json output to promote everyone whose script shows pass.
// If two scripts are very similar, the second person who commited that script will go to isolation-center. We will be running a parser to check for similarity
// You may help your team member, but do not do it for them
// Any language is fine for the scripts you team mates are committing, but bear in mind that it has to run on our server. 
//If you decide to use Cobol or Fortran '77, the tester script should return failed and the intern will not be promoted.
// If your team seems to be floundering and cannot achieve the task, feel free to abandon the team and switch to a more competent team
// Here is the structure we are expecting:
// Git Repo:
// -index.php
// -scripts
// --- intern_script1.php
// --- random_intername.py
// --- myscript.js


$hello = "Hello World, this is Tobi Folajin with HNGi7 ID HNG-00811 using vanilla PHP for stage 2 task";
$output= json_encode($hello);

echo "<h5>" .$output. "</h5>";

return $output;


?>
</body>
</html>