<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidesTable extends Migration
{
	public function up()
	{
		Schema::create('rides', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('mode');
			$table->unsignedInteger('passengers');
			$table->unsignedBigInteger('cents');
			$table->timestamps();
		});
	}
	
	public function down()
	{
		Schema::dropIfExists('rides');
	}
}
