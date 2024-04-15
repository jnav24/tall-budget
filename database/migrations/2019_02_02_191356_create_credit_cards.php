<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('credit_cards')) {
            Schema::create('credit_cards', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('limit');
                $table->string('last_4');
                $table->string('exp_month');
                $table->string('exp_year');
                $table->string('apr');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('credit_card_type_id')->constrained()->cascadeOnDelete();
                $table->dateTime('paid_date');
                $table->string('confirmation');
                $table->string('amount');
                $table->string('balance');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('credit_card_templates')) {
            Schema::create('credit_card_templates', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('limit', false, 'unsigned');
                $table->string('last_4');
                $table->string('exp_month');
                $table->string('exp_year');
                $table->string('apr');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('credit_card_type_id')->constrained()->cascadeOnDelete();
                $table->string('amount');
                $table->string('balance');
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
        Schema::dropIfExists('credit_cards');
        Schema::dropIfExists('credit_card_templates');
    }
}
