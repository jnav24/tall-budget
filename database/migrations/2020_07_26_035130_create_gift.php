<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGift extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('gift')) {
            Schema::create('gift', function (Blueprint $table) {
                $table->id();
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('gift_type_id')->constrained()->cascadeOnDelete();
                $table->string('name');
                $table->string('amount');
                $table->string('confirmation');
                $table->boolean('not_track_amount')->default(0);
                $table->unsignedInteger('due_date');
                $table->dateTime('paid_date');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('gift_templates')) {
            Schema::create('gift_templates', function (Blueprint $table) {
                $table->id();
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('gift_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('gift');
        Schema::dropIfExists('gift_templates');
    }
}
