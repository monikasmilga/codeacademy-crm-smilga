<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPcrmProjectsLoginsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pcrm_projects_logins_connections', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_pcrm_projects_logins_connections_pcrm_projects1')->references('id')->on('pcrm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('login_id', 'fk_pcrm_projects_logins_connections_pcrm_projects_logins1')->references('id')->on('pcrm_projects_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pcrm_projects_logins_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pcrm_projects_logins_connections_pcrm_projects1');
			$table->dropForeign('fk_pcrm_projects_logins_connections_pcrm_projects_logins1');
		});
	}

}
