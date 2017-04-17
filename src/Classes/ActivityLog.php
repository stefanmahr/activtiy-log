<?php

namespace Stefanmahr\ActivityLog\Classes;

/* Models */

use Stefanmahr\ActivityLog\Models\Activities;
use Stefanmahr\ActivityLog\Models\Categories;

use Auth;

class ActivityLog {
	
	public function log($data, $secure = true) {
		
		$user_id = Auth::user()->id;
		
		$categorie 	= $data->category;
		$title 		= $data->title;
		
		/* Create Activity */
		
		$activity_id = Activities::insertGetId([
			
			'user_id'		=> $user_id,
			'category_id' 	=> $categorie,
			'title'			=> $title,
			'secure'		=> $secure,
			
		]);
		
		return $activity_id;
		
	}
	
	public function clear($days = 14) {
		
		
		
	}
	
	public function manageCategorie($date, $create = true) {
		
		if ($create == true) {
			
			$categorie_id = Categoires::insertGetId([
				
				'name'	=> $data->name,
				'color'	=> $data->color,
				'icon'	=> $data->icon,
				
			]);
			
		}
		
		return $categorie_id;
		
	}
	
	public function getActivities($user_id) {
		
		
		
	}
	
}