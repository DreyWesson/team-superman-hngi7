<center><table><?php
$files = scanf('scripts');
if($files) {
    foreach($files as $file){
        echo "<tr>"; echo "<pre>";
        echo 'File: '.$file.'<br />';

            unset($output);
            if(preg_match('/.php$/i', $file)){
                $output = exec('php scripts/'.$file);
            } elseif(preg_match('/.py$/i', $file)) {
                $output = exec('python scripts/'.$file);
            } elseif(preg_match('/.js$/i', $file)) {
                $output = exec('node scripts/'.$file);
            }
            
            if(isset($output)) {
                if(isset($output)) {
                    echo 'Output: '.$output.'<br />';
                    $result =  [];
                    preg_match('/^Hello World, this is ([a-zA-Z -]*) with HNGi7 ID ((HNG-|)[0-9]{1,5}) email (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/) using (Python|PHP|JavaScript|Node.js) for stage 2 task(.|)$/i', $output, $result);
                    if(count($result) > 0) {
                        echo 'Name: '.$result[1].'<br />';
                        echo 'HNGi7 ID: '.$result[2].'<br />';
                        echo 'Language: '.$result[4].'<br />';
                        echo 'Email: '.$result[5].'<br />';
                        echo 'Result: <font color=green>Passed, congrats!!!</font>';
                    } else {
                        echo 'Result: <font color=red>Fail </font>:(';
                    }
                }
                 else {
                    echo 'Result: <font color=read>Fail </font>:(';
                }
    

    echo "</pre>"; echo "</tr>";
    }
};?> </table></center>