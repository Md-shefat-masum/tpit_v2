<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkWithUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_with_us', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('image',200)->nullable();
            $table->bigInteger("creator")->unsigned()->nullable();
            $table->string("slug", 50)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('work_with_us');
    }
}
