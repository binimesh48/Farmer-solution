<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovtSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govt_schemes', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('details')->nullable();
            $table->longText('article')->nullable();
            $table->string('banner')->nullable();
            
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('user_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('govt_schemes');
    }
}
