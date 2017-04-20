<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPcrmProjectsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pcrm_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->foreign('person_id', 'fk_pcrm_projects_persons_types_connections_pcrm_persons1')->references('id')->on('pcrm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_pcrm_projects_persons_types_connections_pcrm_projects1')->references('id')->on('pcrm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_pcrm_projects_persons_types_connections_pcrm_projects_pers1')->references('id')->on('pcrm_projects_persons_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pcrm_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pcrm_projects_persons_types_connections_pcrm_persons1');
			$table->dropForeign('fk_pcrm_projects_persons_types_connections_pcrm_projects1');
			$table->dropForeign('fk_pcrm_projects_persons_types_connections_pcrm_projects_pers1');
		});
	}

}
