<?php

namespace Curso;

class File_Logger implements Logger
{
    public function Info($message)
    {
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '('.date('Y-m-d H:i:s').') '.$message."\n",
            FILE_APPEND
        );
    }
}
