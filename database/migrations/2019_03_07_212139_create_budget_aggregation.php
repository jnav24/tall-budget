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
                $table->foreignIdFor(\App\Models\User::class)->constrained();
                $table->foreignIdFor(\App\Models\Budget::class)->constrained();
                $table->integer('budget_id', false, true);
                $table->string('type'); // spent | saved | earned
                $table->string('value');
                $table->timestamps();
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
