<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('budgets')) {
            Schema::create('budgets', function (Blueprint $table) {
                $table->increments('id');
                $table->foreignIdFor(\App\Models\User::class)->constrained();
                $table->string('name');
                $table->dateTime('budget_cycle');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('budget_templates')) {
            Schema::create('budget_templates', function (Blueprint $table) {
                $table->increments('id');
                $table->foreignIdFor(\App\Models\User::class)->constrained();
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
        Schema::dropIfExists('budgets');
        Schema::dropIfExists('budget_templates');
    }
}
