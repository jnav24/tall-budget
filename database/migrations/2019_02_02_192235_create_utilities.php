<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('utilities')) {
            Schema::create('utilities', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('utility_type_id')->constrained()->cascadeOnDelete();
                $table->dateTime('paid_date');
                $table->string('confirmation');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('utility_templates')) {
            Schema::create('utility_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('utility_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('utilities');
        Schema::dropIfExists('utility_templates');
    }
}
