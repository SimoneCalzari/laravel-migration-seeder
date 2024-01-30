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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 50)->nullable();
            $table->char('codice_treno', 6);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->date('data_partenza');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->tinyInteger('numero_carrozze')->unsigned()->nullable();
            $table->boolean('in_orario')->default(false);
            $table->tinyInteger('cancellato')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('codice_treno');
            $table->dropColumn('stazione_partenza');
            $table->dropColumn('stazione_arrivo');
            $table->dropColumn('data_partenza');
            $table->dropColumn('orario_partenza');
            $table->dropColumn('orario_arrivo');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
};
