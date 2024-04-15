<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('investments')) {
            Schema::create('investments', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('investment_type_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('investment_templates')) {
            Schema::create('investment_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('investment_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('investments');
        Schema::dropIfExists('investment_templates');
    }
}
