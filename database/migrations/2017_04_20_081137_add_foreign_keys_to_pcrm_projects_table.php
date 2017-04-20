<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPcrmProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pcrm_projects', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_pcrm_projects_pcrm_clients')->references('id')->on('pcrm_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_pcrm_projects_pcrm_project_types1')->references('id')->on('pcrm_project_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pcrm_projects', function(Blueprint $table)
		{
			$table->dropForeign('fk_pcrm_projects_pcrm_clients');
			$table->dropForeign('fk_pcrm_projects_pcrm_project_types1');
		});
	}

}
