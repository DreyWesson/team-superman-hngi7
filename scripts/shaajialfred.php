<?php
class HngTeams {


    private $greeting = "Hello World";
    private $fullName;
    private $hngId;
    private $email;    
    private $language = "JavaScript";

    function __construct($fullname, $hngId, $language, $email)
    {
        $this->fullName = $fullname;
        $this->hngId = $hngId;
        $this->language = $language;
        $this->email = $email;
    }
    
    function getTeamMate(){
        return "$this->greeting, this is $this->fullName with HNGi7 ID HNG-$this->hngId using $this->language for stage 2 task.$this->email";
    }
}

$hgnTeam = new HngTeams("Shaaji Alfred", "04350", "PHP", "shaajialfred@gmail.com");

echo $hgnTeam->getTeamMate();
