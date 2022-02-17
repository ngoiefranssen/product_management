<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('people_id')->constrained()->cascadeOnDelete();
            $table->string('name_supplier');
            $table->string('fisrt_name_supplier');
            $table->string('kind_supplier');
            $table->integer('age_supplier');
            $table->string('country_supplier');
            $table->string('common_supplier');
            $table->string('avenue_supplier');
            $table->integer('number_supplier');
            // $table->string('image_supplier');
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
        Schema::dropIfExists('suppliers');
    }
}
