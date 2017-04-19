<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectLoginsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_project_logins_connections', function(Blueprint $table)
		{
			$table->foreign('logins_id', 'fk_lar1_prpoject_logins_lar1_logins1')->references('id')->on('crm_project_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_lar1_prpoject_logins_lar1_projects1')->references('id')->on('crm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_project_logins_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_lar1_prpoject_logins_lar1_logins1');
			$table->dropForeign('fk_lar1_prpoject_logins_lar1_projects1');
		});
	}

}
