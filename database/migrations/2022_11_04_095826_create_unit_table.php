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
        Schema::create('units', function (Blueprint $table) {
            $table->id('id');
            $table->string('nomUnit',150);
            $table->string('company',150);
            $table->string('country',150);
            $table->string('destination',150);
            $table->string('activeWell',150);
            $table->string('haspId',150);
            $table->string('status',150);
            $table->string('type',150);
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
        Schema::dropIfExists('datahosts');
    }
};
