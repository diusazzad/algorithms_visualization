<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linked_lists', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->unsignedBigInteger('next_id')->nullable();
            $table->unsignedBigInteger('previous_id')->nullable();
            $table->timestamps();

            $table->foreign('next_id')->references('id')->on('linked_lists');
            $table->foreign('previous_id')->references('id')->on('linked_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linked_lists');
    }
};
