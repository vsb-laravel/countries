<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vsb_countries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('iso',3)->unique('iso')->comment('General country iso code');//->charset('utf8')->collation('utf8_unicode_ci');
			$table->string('code',3)->unique('code')->comment('General country code');//->charset('utf8')->collation('utf8_unicode_ci');
			$table->string('name',128)->unique('name')->comment('General country default name');
			$table->string('phone',5)->unique('phone')->comment('General country phone code');
			$table->integer('enabled')->unsigned()->index('enabled')->default(1)->comment('If not enabled hidden from list');
			// $table->integer('timezone_id')->unsigned()->index('currency_id');
            //
            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vsb_countries');
	}

}
