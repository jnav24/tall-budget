<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('personal')) {
            Schema::create('personal', function (Blueprint $table) {
                $table->id();
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('personal_type_id')->constrained()->cascadeOnDelete();
                $table->string('name');
                $table->string('amount');
                $table->string('confirmation');
                $table->boolean('not_track_amount')->default(0);
                $table->unsignedInteger('due_date');
                $table->dateTime('paid_date');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('personal_templates')) {
            Schema::create('personal_templates', function (Blueprint $table) {
                $table->id();
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('personal_type_id')->constrained()->cascadeOnDelete();
                $table->string('name');
                $table->string('amount');
                $table->unsignedInteger('due_date');
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
        Schema::dropIfExists('personal');
        Schema::dropIfExists('personal_templates');
    }
}
