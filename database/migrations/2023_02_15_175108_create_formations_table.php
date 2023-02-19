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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('duree');
            $table->string('description');
            $table->boolean('isStarted')->default(0);
            $table->dateTime('date_debut');
            $table->foreignId('Referenciel_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * b
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
};
