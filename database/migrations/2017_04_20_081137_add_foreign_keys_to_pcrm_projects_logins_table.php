<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPcrmProjectsLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pcrm_projects_logins', function(Blueprint $table)
		{
			$table->foreign('type_id', 'fk_pcrm_projects_logins_pcrm_projects_logins_types1')->references('id')->on('pcrm_projects_logins_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pcrm_projects_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_pcrm_projects_logins_pcrm_projects_logins_types1');
		});
	}

}
