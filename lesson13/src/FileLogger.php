<?php

namespace Styde;

class FileLogger implements Logger
{
    public function info($message)
    {
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '('.date('Y-m-d H:i:s').') '.$message."\n",
            FILE_APPEND
        );
    }
}