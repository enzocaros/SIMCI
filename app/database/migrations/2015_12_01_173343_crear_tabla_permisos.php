<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration; 

class CrearTablaPermisos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permisos', function($table)
		{
			$table->string('codigo',5);
			$table->string('nombre',15);
			$table->string('descripcion',150);

			$table->increments('secuencia');
			$table->dropPrimary('secuencia');

			$table->primary('codigo');

			$table->nullableTimestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		drop_cascade('permisos');
	}

}
