<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('people_id')->constrained()->cascadeOnDelete();
            $table->string('name_client');
            $table->string('fisrt_name_client');
            $table->string('kind_client');
            $table->integer('age_client');
            $table->string('country_client');
            $table->string('common_client');
            $table->string('avenue_client');
            $table->integer('number_client');
            // $table->string('image_client')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
