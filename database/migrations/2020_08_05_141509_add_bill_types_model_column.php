<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBillTypesModelColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasColumn('bill_types', 'model')) {
            Schema::table('bill_types', function (Blueprint $table) {
                $table->string('model');
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
        if (Schema::hasColumn('bill_types', 'model')) {
            Schema::table('bill_types', function (Blueprint $table) {
                $table->dropColumn('model');
            });
        }
    }
}
