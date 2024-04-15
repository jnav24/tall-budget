<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiscellaneous extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('miscellaneous')) {
            Schema::create('miscellaneous', function (Blueprint $table) {
                $table->id();
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->string('name');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->dateTime('paid_date');
                $table->string('confirmation');
                $table->boolean('not_track_amount')->default(false);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('miscellaneous_templates')) {
            Schema::create('miscellaneous_templates', function (Blueprint $table) {
                $table->id();
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('miscellaneous');
        Schema::dropIfExists('miscellaneous_templates');
    }
}
