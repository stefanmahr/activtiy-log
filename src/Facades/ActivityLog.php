<?php
namespace Stefanmahr\ActivityLog\Facades;

use Illuminate\Support\Facades\Facade;

class ActivityLog extends Facade {
	
    protected static function getFacadeAccessor() { 
		
		return 'ActivityLog'; 
		
	}
	
}