<?php
class Info {
    protected $message;

    public function __construct()
    {
        $name = "Douglas Okolaa";
        $id = "HNG-81727";
        $language = "PHP";
        $this->message = "Hello World, this is $name with HNGi7 ID $id using $language for stage 2 task";
    }

    public function output()
    {
        return $this->message;
    }
}

$doug = new Info();

return $doug->output();
