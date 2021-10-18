<?php

declare(strict_types=1);

namespace Larapkg\Artisan;

use Laravel\Lumen\Application as LumenApplication;

class Application extends LumenApplication
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return 'Artisan (1.0.1) (Lumen 8.2.7 Laravel Components ^8.0)';
    }

    /**
     * Get the path to the application "app" directory.
     */
    public function path(): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'src';
    }

    /**
     * Register the aliases for the application.
     *
     * @param  array  $userAliases
     * @return void
     */
    public function withAliases($userAliases = [])
    {
        $defaults = [
            \Illuminate\Support\Facades\Cache::class => 'Cache',
//            \Illuminate\Support\Facades\DB::class => 'DB',
            \Illuminate\Support\Facades\Event::class => 'Event',
            \Illuminate\Support\Facades\Log::class => 'Log',
            \Illuminate\Support\Facades\Queue::class => 'Queue',
            \Illuminate\Support\Facades\Route::class => 'Route',
//            \Illuminate\Support\Facades\Schema::class => 'Schema',
//            \Illuminate\Support\Facades\Storage::class => 'Storage',
//            \Illuminate\Support\Facades\URL::class => 'URL',
//            \Illuminate\Support\Facades\Validator::class => 'Validator',
        ];

        if (! static::$aliasesRegistered) {
            static::$aliasesRegistered = true;

            $merged = array_merge($defaults, $userAliases);

            foreach ($merged as $original => $alias) {
                class_alias($original, $alias);
            }
        }
    }

    /**
     * The available container bindings and their respective load methods.
     *
     * @var array
     */
    public $availableBindings = [
//        'auth' => 'registerAuthBindings',
//        'auth.driver' => 'registerAuthBindings',
//        \Illuminate\Auth\AuthManager::class => 'registerAuthBindings',
//        \Illuminate\Contracts\Auth\Guard::class => 'registerAuthBindings',
//        \Illuminate\Contracts\Auth\Access\Gate::class => 'registerAuthBindings',
//        \Illuminate\Contracts\Broadcasting\Broadcaster::class => 'registerBroadcastingBindings',
//        \Illuminate\Contracts\Broadcasting\Factory::class => 'registerBroadcastingBindings',
        \Illuminate\Contracts\Bus\Dispatcher::class => 'registerBusBindings',
        'cache' => 'registerCacheBindings',
        'cache.store' => 'registerCacheBindings',
        \Illuminate\Contracts\Cache\Factory::class => 'registerCacheBindings',
        \Illuminate\Contracts\Cache\Repository::class => 'registerCacheBindings',
        'composer' => 'registerComposerBindings',
        'config' => 'registerConfigBindings',
        'db' => 'registerDatabaseBindings',
        \Illuminate\Database\Eloquent\Factory::class => 'registerDatabaseBindings',
//        'filesystem' => 'registerFilesystemBindings',
//        'filesystem.cloud' => 'registerFilesystemBindings',
//        'filesystem.disk' => 'registerFilesystemBindings',
//        \Illuminate\Contracts\Filesystem\Cloud::class => 'registerFilesystemBindings',
//        \Illuminate\Contracts\Filesystem\Filesystem::class => 'registerFilesystemBindings',
//        \Illuminate\Contracts\Filesystem\Factory::class => 'registerFilesystemBindings',
//        'encrypter' => 'registerEncrypterBindings',
//        \Illuminate\Contracts\Encryption\Encrypter::class => 'registerEncrypterBindings',
        'events' => 'registerEventBindings',
        \Illuminate\Contracts\Events\Dispatcher::class => 'registerEventBindings',
        'files' => 'registerFilesBindings',
        'hash' => 'registerHashBindings',
        \Illuminate\Contracts\Hashing\Hasher::class => 'registerHashBindings',
        'log' => 'registerLogBindings',
        \Psr\Log\LoggerInterface::class => 'registerLogBindings',
        'queue' => 'registerQueueBindings',
        'queue.connection' => 'registerQueueBindings',
        \Illuminate\Contracts\Queue\Factory::class => 'registerQueueBindings',
        \Illuminate\Contracts\Queue\Queue::class => 'registerQueueBindings',
        'router' => 'registerRouterBindings',
        \Psr\Http\Message\ServerRequestInterface::class => 'registerPsrRequestBindings',
        \Psr\Http\Message\ResponseInterface::class => 'registerPsrResponseBindings',
//        'translator' => 'registerTranslationBindings',
        'url' => 'registerUrlGeneratorBindings',
//        'validator' => 'registerValidatorBindings',
//        \Illuminate\Contracts\Validation\Factory::class => 'registerValidatorBindings',
//        'view' => 'registerViewBindings',
//        \Illuminate\Contracts\View\Factory::class => 'registerViewBindings',
    ];
}
