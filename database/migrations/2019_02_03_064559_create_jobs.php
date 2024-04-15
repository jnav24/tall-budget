<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('jobs')) {
            Schema::create('jobs', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('job_type_id')->constrained()->cascadeOnDelete();
                $table->dateTime('initial_pay_date');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('job_templates')) {
            Schema::create('job_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('amount');
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('job_type_id')->constrained()->cascadeOnDelete();
                $table->dateTime('initial_pay_date');
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
        Schema::dropIfExists('jobs');
    }
}
