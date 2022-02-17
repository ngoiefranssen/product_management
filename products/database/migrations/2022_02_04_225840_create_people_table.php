<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('role_id')->constrained()->cascadeOnDelete();
            // $table->string('name_people');
            // $table->string('first_name');
            // $table->string('kind');
            // $table->integer('age');
            // $table->string('common');
            // $table->string('piece');
            // $table->string('avenue');
            // $table->integer('number');
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
        Schema::dropIfExists('people');
    }
}
