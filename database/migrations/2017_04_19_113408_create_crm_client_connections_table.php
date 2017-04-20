<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmClientConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_client_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('client_id', 36)->index('fk_lar1_contact_person_lar1_clients_idx');
			$table->string('person_id', 36)->index('fk_lar1_contact_person_lar1_persons1_idx');
			$table->string('contact_type_id', 36)->index('fk_lar1_contact_person_lar1_contact_type1_idx');
			$table->text('description', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_client_connections');
	}

}
