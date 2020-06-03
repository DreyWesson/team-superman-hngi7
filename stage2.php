<?php


// Create a new object
$intenshipTask = new Task();

// call the getStatistic to generate a brief information about the entire data 
$intenshipTask->getStatistic();

// helps to call all Passed test and print out result
$intenshipTask->getPassed();

// helps to call all failed test and print out result
$intenshipTask->getFailed();


class Task{

    private $passedTest = array();
    private $failedTest = array();

    function getStatistic(){
        // provides brief summary of the entire team members
        echo '<br /><br />';
        echo "&nbsp &nbsp Statistic";
        echo '<br />----------------------------<br >';
        echo "No. of Passed : ".count($this->passedTest);
        echo '<br />----------------------------<br >';
        echo "No. of Failed : ".count($this->failedTest);
        echo '<br />----------------------------<br >';
        echo "Total number  : ".(count($this->failedTest)+count($this->passedTest));
        echo '<br />----------------------------<br >';
        echo '<br /><br />';
    }

    function __construct()
    {
        $this->initialize();
    }    
    
    function getPassed(){
        // count the number of pass test in an array
        $arrayLength = count($this->passedTest);
        $index = 1;        
        if($arrayLength>0){

            foreach($this->passedTest as $team){
                echo $index. ")<br >";
                // loop through each passed team member    
            
                foreach($team as $key => $data){
                    // loop through each team member and print out the data
                    echo $data;

                }
                $index++;
                echo '<br /><br />';
                
            }

        }else{

            echo "No Passed Data Available";
        }

    }

    function getFailed(){
        $arrayLength = count($this->failedTest);
        $index = 1;
        if($arrayLength>0){
            foreach($this->failedTest as $team){
                    // loop through each failed team member    
                echo $index. ")<br >";
                foreach($team as $key => $data){
                    // loop through each team member and print out the data
                    echo $data;
                }
                echo '<br /><br />';
                $index++;
            }
            

        }else{

            echo "No Failed Data Available";
        }

    }

 function initialize(){

        $doubleIndent = '&nbsp &nbsp';
        $singleIndent = '&nbsp';
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
                    preg_match('/^Hello World, this is ([a-zA-Z -]*) with HNGi7 ID ((HNG-|)[0-9]{1,5}) using (Python|PHP|JavaScript|Node.js) for stage 2 task(.|)$/i', $output, $result);
                    if(count($result) > 0) {


                        array_push($this->passedTest,
                        array(
                            "filename"=> 'File: '. $file .'<br />',
                            "output"=>  $singleIndent . 'Output: '.$output.'<br />',
                            "name"=>$doubleIndent . 'Name: '.$result[1].'<br />',
                            "HNGi7" => $doubleIndent . 'HNGi7 ID: '.$result[2].'<br />',
                            "language" => $doubleIndent . 'Language: '.$result[4].'<br />',
                            "result" => $doubleIndent . 'Result: Passed, congrats!!!'
                        ));
                    } else {
                        array_push($this->failedTest,
                      array(
                          "filename"=> 'File: '.$file.'<br />',
                          //"output"=>  $singleIndent . 'Output: '.$output.'<br />',
                          "output"=>  $singleIndent . 'Output: Wrong Format, check README.md for example<br />',
                          "result" => $doubleIndent . 'Result: Fail :('
                      )  
                    );
                        //echo 'Result: Fail :(';
                    }
                } else {
                    //echo 'No output data recieved :(';
                }
        
                
            }
        }

    }
   
    
}


