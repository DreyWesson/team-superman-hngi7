<?php
$files = scandir('scripts');
if($files) {
    foreach($files as $file) {
        unset($output);
        if(preg_match('/.php$/i', $file)){
            $output = exec('php scripts/'.$file);
        } elseif(preg_match('/.py$/i', $file)) {
            $output = exec('python scripts/'.$file);
        } elseif(preg_match('/.js$/i', $file)) {
            $output = exec('node scripts/'.$file);
        }
        if(isset($output)) {
            $result =  [];
            preg_match('/^Hello World, this is ([a-zA-Z ]*) with HNGi7 ID ([0-9]{1,5}) using (Python|PHP|JavaScript) for stage 2 task$/i', $output, $result);
            if(count($result) > 0) {
                print_r($result);
                echo  'Passed!!! Congrats!!!';
            }
            echo '<br /><br />';
        }
    }
}
