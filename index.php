<?php
$files = array_filter(scandir('scripts'), function($elem){
    return !is_dir('scripts/'.$elem);
});
$scripts = [];
if($files) {
    foreach($files as $key => $file) {
        $script = [];

        $script['file'] = $file;

        unset($output);
        if(preg_match('/.php$/i', $file)){
            $output = exec('php scripts/'.$file);
        } elseif(preg_match('/.py$/i', $file)) {
            $output = exec('python scripts/'.$file);
        } elseif(preg_match('/.js$/i', $file)) {
            $output = exec('node scripts/'.$file);
        }

        if(isset($output)) {
            $script['output'] = $output;
            $result =  [];
            preg_match('/^Hello World, this is ([a-zA-Z -]*) with HNGi7 ID ((HNG-|)[0-9]{1,5}) using (Python|PHP|JavaScript|Node.js) for stage 2 task(.|)$/i', $output, $result);
            if(count($result) > 0) {
                $script['Name'] = $result[1];
                $script['HNGi7 ID'] = $result[2];
                $script['Language'] = $result[4];
                $script['Result']= true;
            } else {
                $script['Result'] = false;
            }
        } else {
            $script['Result'] = false;
        }
        array_push($scripts, $script);
    }
}
require_once('./head.php');