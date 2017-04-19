<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmPersonConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_person_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->text('description', 65535);
			$table->string('project_id', 36)->index('fk_lar1_responsible_person_lar1_projects1_idx');
			$table->string('person_id', 36)->index('fk_lar1_responsible_person_lar1_persons1_idx');
			$table->string('person_type_id', 36)->index('fk_lar1_responsible_person_lar1_person_types1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_person_connections');
	}

}
