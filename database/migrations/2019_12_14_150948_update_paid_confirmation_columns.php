<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePaidConfirmationColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credit_cards', function (Blueprint $table) {
            $table->dateTime('paid_date')->nullable()->change();
            $table->string('confirmation')->nullable()->change();
        });

        Schema::table('utilities', function (Blueprint $table) {
            $table->dateTime('paid_date')->nullable()->change();
            $table->string('confirmation')->nullable()->change();
        });

        Schema::table('medical', function (Blueprint $table) {
            $table->dateTime('paid_date')->nullable()->change();
            $table->string('confirmation')->nullable()->change();
        });

        Schema::table('miscellaneous', function (Blueprint $table) {
            $table->dateTime('paid_date')->nullable()->change();
            $table->string('confirmation')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
