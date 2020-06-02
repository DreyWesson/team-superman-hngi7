<?php


  function wrapText($output, $filename) {
    $test1 = strpos($output,'Hello World, this is ');
    $test2 = strpos($output, ' with HNGi7 ID ');
    $test3 = strpos($output, ' using ');
    $test4 = strpos($output, ' for stage 2 task');
    $status = ($test1 && $test2 && $test3 && $test4)? 'PASSED':'FAILED';
    
    //Parsing name
    $name = substr($output, strpos($output, ' is ')+4, strlen($output));
    $name = substr($name, 0, strpos($name, ' with '));
    
    //Parsing ID
    $id = substr($output, strpos($output, ' ID ')+4, strlen($output));
    $id = substr($id, 0, strpos($id, ' using '));

    //Parsing Language
    $lang = substr($output, strpos($output, ' using ')+7, strlen($output));
    $lang = substr($lang, 0, strpos($lang, ' for '));

    return '
************************************************************************************************************************
*Filename: '.$filename.'
*
*Name: '.$name.' (Maybe invalid)
*
*HNG ID: '.$id.'  (Maybe invalid)
*
*Language: '.$lang.'  (Maybe invalid)
*
*Output: '.$output.'
*
*Test status: '.$status.'
************************************************************************************************************************
';
  }


  $dir = scandir('./scripts/');
  foreach ($dir as $value) {
    $ext = pathinfo('./scripts/'.$value, PATHINFO_EXTENSION);
    if($ext == 'php'){
      echo wrapText(exec("php ./scripts/".$value), $value);
    }
    if($ext == 'js'){
      echo wrapText(exec("node ./scripts/".$value), $value);
    }
    if($ext == 'py'){
      echo wrapText(exec("python ./scripts/".$value), $value);
    }
  }


?>


