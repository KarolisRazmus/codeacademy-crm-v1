<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmProjectLoginsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_project_logins_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('project_id', 36)->index('fk_lar1_prpoject_logins_lar1_projects1_idx');
			$table->string('logins_id', 36)->index('fk_lar1_prpoject_logins_lar1_logins1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_project_logins_connections');
	}

}
