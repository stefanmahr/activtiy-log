<?php

namespace Stefanmahr\ActivityLog;

use Illuminate\Support\ServiceProvider;

class ActivityLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       	$this->publishes([__DIR__ . '/migrations/2017_04_17_133922_ActivityLog.php' => base_path('database/migrations/2017_04_17_133922_ActivityLog.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
		\App::bind('ActivityLog', function() {
			
            return new Classes\ActivityLog;
			
        });
		
    }
}
