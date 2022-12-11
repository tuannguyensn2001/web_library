<?php

namespace App\Core\Env;

use http\Exception\RuntimeException;

class Env
{
    private $path;

    public function __construct()
    {
        $this->path = __DIR__."/../../../../.env";
    }

    public function load()
    {
        if (!is_readable($this->path)) {
            throw new RuntimeException("file env can't read");
        }
        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {

            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
            }
        }
    }
}