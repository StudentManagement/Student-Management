<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			//$table->integer('role_id')->nullable();
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->string('avatar', 191)->nullable()->default('users/default.png');
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->string('reg_no')->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('contact_no')->nullable();
			$table->string('nic')->nullable();
			$table->integer('institute_id')->nullable();
			$table->softDeletes();
			$table->integer('al_batch')->nullable();
			$table->string('gender')->nullable();
			$table->string('password_change_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('users');
	}

}
