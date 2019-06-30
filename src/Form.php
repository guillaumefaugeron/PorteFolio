<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 29/06/2019
 * Time: 21:42
 */

//namespace guillaume\Form;


class Form
{   private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $content;
    }
    public function name()
    {
        return $this->name;
    }
    public function email()
    {
        return $this->email;
    }
    public function message()
    {
        return $this->message;
    }
}


