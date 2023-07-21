<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100)->unique();
            $table->string('Stazione_Di_Partenza', 100);
            $table->string('Stazione_Di_Arrivo', 100);
            $table->time('Orario_Di_Partenza');
            $table->time('Orario_Di_Arrivo');
            $table->string('Codice_Treno', 6);
            $table->smallInteger('Numero_Carrozze')->nullable();
            $table->boolean('In_Orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
