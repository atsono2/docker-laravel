<?php

namespace App\Http;

class Myclass
{
    public $message;
    public $slack;

    // Slackクラスに依存している
    public function __construct(Slack $slack)
    {
        $this->slack = $slack;
    }
    // public function __construct(Message $message){

    //     $this->message = $message;

    // }

    // slackクラスのsendメソッドを呼ぶだけ
    public function run(){

        $this->slack->send();

    }
}
