<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_entries', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->integer('province_id');
            $table->integer('lgu_id');
            $table->bigInteger('input_1');
            $table->bigInteger('input_2');
            $table->bigInteger('input_3');
            $table->bigInteger('input_4');
            $table->bigInteger('input_5');
            $table->bigInteger('input_6');
            $table->bigInteger('input_7');
            $table->bigInteger('input_8');
            $table->bigInteger('input_9');
            $table->bigInteger('input_10');
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
        Schema::dropIfExists('report_entries');
    }
}
