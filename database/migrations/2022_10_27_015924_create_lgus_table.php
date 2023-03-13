<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLgusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgus', function (Blueprint $table) {
            $table->id();
            $table->string('province');
            $table->string('citymun');
            $table->longText('link_token');
            $table->string('capital');
            $table->string('population');
            $table->string('zip_code');
            $table->longText('lgu_description');
            $table->integer('status')->comment('0 = active, 1 = inactive');
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
        Schema::dropIfExists('lgus');
    }
}
