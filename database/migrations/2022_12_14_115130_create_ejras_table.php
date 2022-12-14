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
        Schema::create('ejras', function (Blueprint $table) {
            $table->id();
            $table->string('e_name');
            $table->string('docs');
            $table->string('tags');
            $table->string('location');
            $table->string('details');
            $table->string('s_tags')->nullable();
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
        Schema::dropIfExists('ejras');
    }
};
