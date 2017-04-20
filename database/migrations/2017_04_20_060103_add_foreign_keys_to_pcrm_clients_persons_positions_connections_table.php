<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPcrmClientsPersonsPositionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pcrm_clients_persons_positions_connections', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_pcrm_clients_persons_positions_connections_pcrm_clients1')->references('id')->on('pcrm_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('position_id', 'fk_pcrm_clients_persons_positions_connections_pcrm_clients_po1')->references('id')->on('pcrm_clients_positions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_pcrm_clients_persons_positions_connections_pcrm_persons1')->references('id')->on('pcrm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pcrm_clients_persons_positions_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pcrm_clients_persons_positions_connections_pcrm_clients1');
			$table->dropForeign('fk_pcrm_clients_persons_positions_connections_pcrm_clients_po1');
			$table->dropForeign('fk_pcrm_clients_persons_positions_connections_pcrm_persons1');
		});
	}

}
