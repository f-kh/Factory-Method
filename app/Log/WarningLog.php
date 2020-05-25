<?php

namespace App\Log;

class WarningLog implements LogInterface
{
    protected $log = 'This is a warning log.';

    public function log()
    {
        return $this->log;
    }
}
