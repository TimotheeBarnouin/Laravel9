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
        Schema::create('equipe', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->id();
            $table->string('pays')->unique();
            $table->string('drapeau');
            $table->unsignedBigInteger('groupe_id');
            $table->foreign('groupe_id')->references('id')->on('groupe')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }
};
