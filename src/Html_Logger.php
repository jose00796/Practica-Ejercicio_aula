<?php

namespace Curso;

class Html_Logger implements Logger
{
    public function Info($message)
    {
        echo "<p> $message </p>";
    }
}
