<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBillTypesAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasColumn('bill_types', 'save_type')) {
            Schema::table('bill_types', function (Blueprint $table) {
                $table->tinyInteger('save_type')->default('0');
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
        if (Schema::hasColumn('bill_types', 'save_type')) {
            Schema::table('bill_types', function (Blueprint $table) {
                $table->dropColumn('save_type');
            });
        }
    }
}
