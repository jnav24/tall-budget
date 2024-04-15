<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('medical')) {
            Schema::create('medical', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('medical_type_id')->constrained()->cascadeOnDelete();
                $table->dateTime('paid_date');
                $table->string('confirmation');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('medical_templates')) {
            Schema::create('medical_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('medical_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('medical');
        Schema::dropIfExists('medical_templates');
    }
}
