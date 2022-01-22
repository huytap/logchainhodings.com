<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcosystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecosystems', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 100)->nullable();
            $table->integer('priority')->nullable();
            $table->string('logo', 100)->nullable();
            $table->longText('description')->nullable();
            $table->string('link', 200)->nullable();
            $table->integer('status')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecosystems');
    }
}
