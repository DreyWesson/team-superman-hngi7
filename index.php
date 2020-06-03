<?php
$files =array_filter(scandir('scripts'), function($script) {
    return !is_dir('scripts/' . $script);
}); // To remove "." and  ".." from the array output os scabdir
if ($files) {
    foreach ($files as $file) {
        echo 'File: ' . $file . '<br />';

        unset($output);
        if (preg_match('/.php$/i', $file)) {
            $output = exec('php scripts/' . $file);
        } elseif (preg_match('/.py$/i', $file)) {
            $output = exec('python scripts/' . $file);
        } elseif (preg_match('/.js$/i', $file)) {
            $output = exec('node scripts/' . $file);
        }

        if (isset($output)) {
            if (!isset($_GET['json'])) {
                echo 'Output: ' . $output . '<br />';
                $result = [];
                preg_match('/^Hello World, this is ([a-zA-Z -]*) with HNGi7 ID ((HNG-|)[0-9]{1,5}) using (Python|PHP|JavaScript|Node.js) for stage 2 task(.|)$/i', $output, $result);
                if (count($result) > 0) {
                    echo 'Name: ' . $result[1] . '<br />';
                    echo 'HNGi7 ID: ' . $result[2] . '<br />';
                    echo 'Language: ' . $result[4] . '<br />';
                    echo 'Result: Passed, congrats!!!<br /><br /><br />';
                } else {
                    echo 'Result: Fail :(<br /><br /><br />';

                }
            }else{
                $result = array('menu1' => 'home', 'menu2' => 'code php', 'menu3' => 'about');

//return the json response :
                header('Content-Type: application/json');  // <-- header declaration
                echo json_encode($result, true);    // <--- encode
                exit();
            }
        } else {
            echo 'Result: Fail :(  <br /><br /><br /><br />';
        }

    }
}
