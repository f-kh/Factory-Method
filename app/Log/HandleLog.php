<?php

namespace App\Log;

use App\Log\ManageFactory;

class HandleLog
{
    protected $messageLog;

    protected $log;

    public function __construct()
    {
        $this->log = new ManageFactory();
    }

    public function printLog($typeLog = null) {
        $logger = $this->log->getLog($typeLog);
        $this->messageLog = $logger->log();
    }
    public function getMessage() {
        return $this->messageLog;
    }
}
