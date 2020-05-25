<?php

namespace App\Play;

class index
{
    public function play()
    {
        ((new PlayFactory())->setPost('goalkeeper'))->run();
    }
}
