<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaElementosQuimicos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elementos_quimicos', function($table)
		{
			$table->increments('id');
			$table->integer('periodo');
			$table->string('grupo_cas', 5);
			$table->integer('grupo_iupac');
			$table->string('simbolo', 3);
			$table->integer('numero_atomico');
			$table->string('nombre', 20);
			$table->decimal('peso_atomico', 20,10);
			$table->string('valencia', 20);
			$table->decimal('temp_ebullicion',20,10);
			$table->decimal('temp_fusion',20,10);
			$table->string('bloque', 2);
			$table->integer('cod_estado');
			$table->integer('cod_clasificacion');
			$table->integer('cod_subclasificacion');
			$table->string('config_electronica',90);
			$table->decimal('densidad',15,10);
			$table->decimal('electronegatividad',15,10);

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
		Schema::drop('elementos_quimicos');
	}

}
