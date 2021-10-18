<?php

declare(strict_types=1);

namespace Larapkg\Artisan;

class Application extends \Laravel\Lumen\Application
{
    /**
     * Get the path to the application "app" directory.
     */
    public function path(): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'src';
    }
}
