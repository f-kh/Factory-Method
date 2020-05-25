<?php

namespace App\Log;

use App\Log\ErrorLog;
use App\Log\InfoLog;
use App\Log\WarningLog;

class ManageFactory
{
    protected $log;

    public function getLog($typeLog)
    {
        $model = strtolower($typeLog);
        if ($model == 'error') {
            return $this->log = new ErrorLog();
        } elseif ($model == 'info') {
            return $this->log = new InfoLog();
        } elseif ($model == 'warning') {
            return $this->log = new WarningLog();
        } else {
            return $this->log = "This is a unknown log.";
        }
    }
}
