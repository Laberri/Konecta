<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKcrmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kcrm', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula',25)->nullable();
            $table->string('Nombre',45)->nullable();
            $table->string('ID_Venta',25)->nullable();
            $table->string('Fecha_Venta',25)->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Fecha_Gestion',25)->nullable();
            $table->string('Gestor',25)->nullable();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kcrm');
    }
}
