<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetAggregation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('budget_aggregation')) {
            Schema::create('budget_aggregation', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id', false, true);
                $table->integer('budget_id', false, true);
                $table->string('type'); // spent | saved | earned
                $table->string('value');
                $table->timestamps();
            });

            Schema::table('budget_aggregation', function ($table) {
                $table->foreign('budget_id')
                    ->references('id')
                    ->on('budgets')
                    ->onDelete('cascade');

                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggregation');
    }
}
