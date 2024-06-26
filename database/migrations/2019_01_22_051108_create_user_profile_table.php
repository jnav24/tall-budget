<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('user_profile')) {
            Schema::create('user_profile', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('image');
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
        Schema::dropIfExists('user_profile');
    }
}
