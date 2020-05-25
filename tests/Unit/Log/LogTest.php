
<?php

namespace Tests\Unit\Log;

use App\Log\HandleLog;
use Tests\TestCase;

class LogTest extends TestCase
{
    public function test_print_log()
    {
        $message = new HandleLog();
        $message->printLog('error');

        var_dump($message->getMessage());

        $this->assertTrue(true);
    }
}
