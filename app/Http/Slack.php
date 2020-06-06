<?php

namespace App\Http;

class Slack implements Message
{
    public function send()
    {
        dd('sendメソッドです');
    }
}
