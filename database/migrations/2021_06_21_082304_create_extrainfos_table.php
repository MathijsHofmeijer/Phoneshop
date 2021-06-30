<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrainfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrainfos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kleur', 50);

            $table->string('besturingssysteem', 50);

            $table->string('Extra_id');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extrainfos');
    }
}
