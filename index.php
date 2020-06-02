<?php
$files = scandir('scripts');
if($files) {
    foreach($files as $file) {
        echo '
            File: '.$file.'';

        unset($output);
        if(preg_match('/.php$/i', $file)){
            $output = exec('php scripts/'.$file);
        } elseif(preg_match('/.py$/i', $file)) {
            $output = exec('python scripts/'.$file);
        } elseif(preg_match('/.js$/i', $file)) {
            $output = exec('node scripts/'.$file);
        }

        if(isset($output)) {
            echo '
            Output: '.$output.'';
            $result =  [];
            preg_match('/^Hello World, this is ([a-zA-Z -]*) with HNGi7 ID ((HNG-|)[0-9]{1,5}) using (Python|PHP|JavaScript|Node.js) for stage 2 task(.|)$/i', $output, $result);
            if(count($result) > 0) {
                echo '
            Name: '.$result[1].'';
                echo '
            HNGi7 ID: '.$result[2].'';
                echo '
            Language: '.$result[4].'';
                echo '
            Result: Passed, congrats!!!';
            } else {
                echo '
            Result: Fail :(';
            }
        } else {
            echo '
            Result: Fail :(';
        }

        echo '
        ';
    }
}
