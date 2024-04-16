<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Doctrine\DBAL\Types\Type;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Register 'geography' type with Doctrine DBAL
        if (!Type::hasType('geography')) {
            Type::addType('geography', 'string');
        }

        // Use 'string' as the Doctrine type for 'geography' columns
        $platform = $this->app['db']->getDoctrineSchemaManager()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('geography', 'string');
    }
}
