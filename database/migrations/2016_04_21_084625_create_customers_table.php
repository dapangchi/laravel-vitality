<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 128)->unique();
			$table->string('password', 60);
			$table->string('passsalt', 8);
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->boolean('gender')->default(1);
			$table->date('birthday')->default('0000-00-00');
			$table->text('picture', 65535)->nullable();
			$table->text('address', 65535);
			$table->string('phone', 32);
			$table->string('facebook_name', 32);
			$table->string('twitter_name', 32);
			$table->text('summary', 65535)->nullable();
			$table->dateTime('logdate')->nullable();
			$table->integer('lognum')->nullable()->default(0);
			$table->boolean('is_active')->default(0);
			$table->string('active_code', 100)->nullable();
			$table->boolean('is_subscribed')->default(0);
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
		Schema::drop('customers');
	}

}
