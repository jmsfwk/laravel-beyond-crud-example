<?php

namespace Support;

class Application extends \Illuminate\Foundation\Application
{
    protected $namespace = 'App\\';

    public function path($path = '')
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'app/App'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
