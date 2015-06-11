<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function($table)
		{
		    $table->integer('id');
		    $table->string('full_name');
		    $table->integer('math')->nullable();
		    $table->integer('physics')->nullable();
		    $table->integer('chemistry')->nullable();
		    $table->integer('geometry')->nullable();
		    $table->integer('biology')->nullable();
		    $table->integer('geography')->nullable();
		    $table->integer('history')->nullable();
		    $table->integer('english_lang')->nullable();
		    $table->integer('german_lang')->nullable();
		    $table->integer('french_lang')->nullable();
		    $table->integer('kyrgyz_lang')->nullable();
		    $table->integer('russian_lang')->nullable();
		    $table->integer('uzbek_lang')->nullable();
		    $table->integer('informatics')->nullable();
		    $table->integer('civics')->nullable();
		    $table->string('notes')->nullable();
		    $table->integer('school_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
