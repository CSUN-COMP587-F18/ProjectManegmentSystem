<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('task_id')->nullable();
            $table->string('action_item_id')->nullable();
            $table->string('priority');
            $table->string('severity');
            $table->date('date_raised');
            $table->date('date_assigned')->nullable();
            $table->date('expected_completion_date');
            $table->date('actual_completion_date')->nullable();
            $table->string('status');
            $table->string('status_description');
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
        Schema::dropIfExists('issues');
    }
}
