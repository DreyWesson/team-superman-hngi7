<?php
class HngTeams {


    private String $greeting = "Hello World";
    private String $fullName;
    private String $hngId;
    private String $language = "JavaScript";

    function __construct($fullname, $hngId, $language)
    {
        $this->fullName = $fullname;
        $this->hngId = $hngId;
        $this->language = $language;        
    }
    
    function getTeamMate(){
        return "$this->greeting, this is $this->fullName with HNGi7 ID HNG-$this->hngId using $this->language for stage 2 task";
    }
}

$hgnTeam = new HngTeams("Shaaji Alfred", "04350", "PHP");

echo $hgnTeam->getTeamMate();






