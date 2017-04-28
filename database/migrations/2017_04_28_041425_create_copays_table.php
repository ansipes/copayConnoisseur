<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copays', function (Blueprint $table) {
          $table->increments('id');
          $table->text('brand');
          $table->text('generic');
          $table->integer('copay');
          $table->text('description');
          $table->integer('bin');
          $table->integer('pcn');
          $table->text('group');
          $table->text('member');
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
        Schema::dropIfExists('copays');
    }
}
