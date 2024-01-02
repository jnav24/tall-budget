<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class AddRsuType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('investment_types')->insert([
            ['name' => 'Restricted Stock', 'slug' => 'rsu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
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
