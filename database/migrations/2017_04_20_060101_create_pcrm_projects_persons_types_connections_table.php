<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePcrmProjectsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pcrm_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('project_id', 36)->index('fk_pcrm_projects_persons_types_connections_pcrm_projects1_idx');
			$table->string('person_id', 36)->index('fk_pcrm_projects_persons_types_connections_pcrm_persons1_idx');
			$table->string('type_id', 36)->index('fk_pcrm_projects_persons_types_connections_pcrm_projects_pe_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pcrm_projects_persons_types_connections');
	}

}
