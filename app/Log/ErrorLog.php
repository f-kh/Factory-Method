<?php

namespace App\Log;

class ErrorLog implements LogInterface
{
    protected $log = 'This is a error log.';

    public function log()
    {
        return $this->log;
    }
}
