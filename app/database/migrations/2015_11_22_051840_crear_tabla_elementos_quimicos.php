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
		Schema::create('elementos_quimicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('periodo');
			$table->string('grupo_cas', 5);
			$table->integer('grupo_iupac');
			$table->string('simbolo', 3);
			$table->integer('num_atomico');
			$table->string('nombre', 20);
			$table->decimal('peso_atomico', 3, 5);
			$table->string('valencia', 10);
			$table->string('bloque', 2);
			$table->integer('cod_estado');
			$table->foreing('cod_estado')->reference('estados_materia')->on('cod_estado');
			$table->integer('cod_clasificacion');
			$table->foreing('cod_clasificacion')->reference('clasificacion_elementos')->on('cod_clasificacion');
			$table->integer('cod_sub_clasificacion');
			$tabñe->foreing('cod_sub_clasificacion')->reference('sub_clasificacion_elementos')->on('cod_sub_clasificacion');
			$table->timestamps();
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