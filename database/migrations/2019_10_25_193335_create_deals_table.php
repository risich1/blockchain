<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('customer_id');
            $table->integer('worker_id');
            $table->integer('creator_id');
            $table->integer('status_id')->nullable();
            $table->integer('days');
            $table->float('sum');
            $table->integer('deposit')->default(0);
            $table->dateTime('deal_start_date')->nullable();
            $table->dateTime('deal_end_date')->nullable();
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
