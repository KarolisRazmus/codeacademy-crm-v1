<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertColumnClientTypeInCrmClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crm_clients', function(Blueprint $table)
        {
            $table->enum('client_type', array('J', 'F'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crm_clients', function(Blueprint $table)
        {
            $table->dropColumn('client_type');
        });
    }
}
