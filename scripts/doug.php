<?php
class Info {
    protected $message;

    public function __construct()
    {
        $name = "Douglas Okolaa";
        $id = "HNG-81727";
        $language = "PHP";
        $email = "okolaadouglas@gmail.com";
        $this->message = "Hello World, this is $name with HNGi7 ID $id using $language for stage 2 task.$email";
    }

    public function output()
    {
        return $this->message;
    }
}

$doug = new Info();

echo $doug->output();
