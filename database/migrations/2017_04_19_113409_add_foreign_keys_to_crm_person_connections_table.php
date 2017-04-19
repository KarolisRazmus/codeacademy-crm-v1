<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmPersonConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_person_connections', function(Blueprint $table)
		{
			$table->foreign('person_type_id', 'fk_lar1_responsible_person_lar1_person_types1')->references('id')->on('crm_person_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_lar1_responsible_person_lar1_persons1')->references('id')->on('crm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_lar1_responsible_person_lar1_projects1')->references('id')->on('crm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_person_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_lar1_responsible_person_lar1_person_types1');
			$table->dropForeign('fk_lar1_responsible_person_lar1_persons1');
			$table->dropForeign('fk_lar1_responsible_person_lar1_projects1');
		});
	}

}
