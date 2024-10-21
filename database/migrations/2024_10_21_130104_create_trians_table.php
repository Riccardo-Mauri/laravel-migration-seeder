<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trians', function (Blueprint $table) {
            $table->id();
            //Aggiungo nome della compagnia di treni
            $table->string('Company', 50);
            //Aggiungo la Stazione di Partenza
            $table->string('Dep_Station', 50);
            //Aggiungo la Stazione di Arrivo
            $table->string('Arr_Station', 50);
            //Aggiungo l'orario di partenza
            $table->time('Dep_time');
            //Aggiungo l'orario di arrivo
            $table->time('Arr_time');
            //Codice del treno
            $table->string('code_train', 8)->nullable();
            //Numero di carrozze
            $table->tinyInteger('carriages_number')->nullable()->unsigned();
            //SE è in orario
            $table->boolean('On_time')->default(true);
            //SE è stato cancellato
            $table->boolean('Canceled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trians');
    }
};
