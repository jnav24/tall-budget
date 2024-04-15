<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('banks')) {
            Schema::create('banks', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->foreignId('bank_type_id')->constrained()->cascadeOnDelete();
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('bank_templates')) {
            Schema::create('bank_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->foreignId('bank_type_id')->constrained()->cascadeOnDelete();
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('banks');
        Schema::dropIfExists('bank_templates');
    }
}
