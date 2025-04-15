<?php

class User 
{
    public $name;
    public $email;

    public function __construct($paramName, $paramEmail)
    {
        $this->name = $paramName;
        $this->email = $paramEmail;
    }

    public function sayHi()
    {
        echo 'Hi! my name is ' . $this->name;
    }
}

class JapaneseUser extends User 
{
    public function JapaneseGreet()
    {
        echo 'こんにちは';
    }

    public function sayHi()
    {
        echo 'やあ！俺は' . $this->name . '!開発王になる男だ！';
    }
}
