<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmClientConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_client_connections', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_lar1_contact_person_lar1_clients')->references('id')->on('crm_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('contact_type_id', 'fk_lar1_contact_person_lar1_contact_type1')->references('id')->on('crm_client_connections_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_lar1_contact_person_lar1_persons1')->references('id')->on('crm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_client_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_lar1_contact_person_lar1_clients');
			$table->dropForeign('fk_lar1_contact_person_lar1_contact_type1');
			$table->dropForeign('fk_lar1_contact_person_lar1_persons1');
		});
	}

}
