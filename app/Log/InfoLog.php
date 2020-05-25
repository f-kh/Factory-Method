<?php

namespace App\Log;

class InfoLog implements LogInterface
{
    protected $log = 'This is a info log.';

    public function log()
    {
        return $this->log;
    }
}
