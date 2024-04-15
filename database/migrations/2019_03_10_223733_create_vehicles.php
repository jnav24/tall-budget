<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('vehicles')) {
            Schema::create('vehicles', function (Blueprint $table) {
                $table->id();
                $table->string('mileage');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_id')->constrained()->cascadeOnDelete();
                $table->foreignId('user_vehicle_id')->constrained()->cascadeOnDelete();
                $table->foreignId('vehicle_type_id')->constrained()->cascadeOnDelete();
                $table->dateTime('paid_date');
                $table->string('confirmation');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('vehicle_templates')) {
            Schema::create('vehicle_templates', function (Blueprint $table) {
                $table->id();
                $table->string('mileage');
                $table->string('amount');
                $table->unsignedInteger('due_date');
                $table->foreignId('budget_template_id')->constrained()->cascadeOnDelete();
                $table->foreignId('user_vehicle_id')->constrained()->cascadeOnDelete();
                $table->foreignId('vehicle_type_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('vehicle_templates');
    }
}
