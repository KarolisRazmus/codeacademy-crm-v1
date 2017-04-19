<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectLoginTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_project_login_types', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_lar1_login_types_lar1_logins1')->references('id')->on('crm_project_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_project_login_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_lar1_login_types_lar1_logins1');
		});
	}

}
