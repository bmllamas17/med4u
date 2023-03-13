<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_headers', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('report_header_1')->nullable();
            $table->string('report_header_2')->nullable();
            $table->string('report_header_3')->nullable();
            $table->string('report_header_4')->nullable();
            $table->string('report_header_5')->nullable();
            $table->string('report_header_6')->nullable();
            $table->string('report_header_7')->nullable();
            $table->string('report_header_8')->nullable();
            $table->string('report_header_9')->nullable();
            $table->string('report_header_10')->nullable();
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
        Schema::dropIfExists('report_headers');
    }
}
