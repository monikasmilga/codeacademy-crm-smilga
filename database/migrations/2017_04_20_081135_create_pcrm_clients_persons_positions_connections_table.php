<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePcrmClientsPersonsPositionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pcrm_clients_persons_positions_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('client_id', 36)->index('fk_pcrm_clients_persons_positions_connections_pcrm_clients1_idx');
			$table->string('person_id', 36)->index('fk_pcrm_clients_persons_positions_connections_pcrm_persons1_idx');
			$table->string('position_id', 36)->index('fk_pcrm_clients_persons_positions_connections_pcrm_clients__idx');
			$table->text('description', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pcrm_clients_persons_positions_connections');
	}

}
