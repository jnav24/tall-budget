<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicalAddNoTrackColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medical', function (Blueprint $table) {
            $table->tinyInteger('not_track_amount')->default(0);
        });

        Schema::table('medical_templates', function (Blueprint $table) {
            $table->tinyInteger('not_track_amount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medical', function (Blueprint $table) {
            $table->dropColumn('not_track_column');
        });

        Schema::table('medical_templates', function (Blueprint $table) {
            $table->dropColumn('not_track_column');
        });
    }
}
