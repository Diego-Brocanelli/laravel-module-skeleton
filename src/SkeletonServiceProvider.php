<?php
namespace Bnw\Skeleton;

use Illuminate\Support\ServiceProvider;

class ModuleCurrent
{
    protected static $module;

    private function __construct()
    {
        // ...
    }

    public static function getInstance()
    {
        if (static::$module === null) {
            static::$module = new self();    
        }

        return static::$module;
    }

    public function setModule($name)
    {
        static::$module = $name;
    }

    public function module($name)
    {
        return static::$module;
    }
}

class SkeletonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        ModuleCurrent::getInstance()->setModule('skeleton')

        $this->publishes([
            __DIR__.'/config/skeleton.php' => config_path('skeleton.php'),
        ]);
    }

    public function register()
    {
        $namespace = 'skeleton';

        $this->mergeConfigFrom(__DIR__.'/config/skeleton.php', 'skeleton');
        $this->app->alias(Skeleton::class, 'skeleton');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views/', $namespace);
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/', $namespace);

        // $this->loadTranslationsFrom(__DIR__ . '/lang/', $namespace);
    }
}


function modules_js()
{
    $module = ModuleCurrent::getInstance()->module();

    

}
