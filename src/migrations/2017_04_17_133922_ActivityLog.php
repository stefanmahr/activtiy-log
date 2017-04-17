<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivityLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
		Schema::create('activitylog-activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
			$table->text('title');
			$table->boolean('secure');
            $table->timestamps();
        });
		
		Schema::create('activitylog-categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
			$table->string('icon');
            $table->timestamps();
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       	Schema::drop('activitylog-activities');
		Schema::drop('activitylog-categories');
    }
}
