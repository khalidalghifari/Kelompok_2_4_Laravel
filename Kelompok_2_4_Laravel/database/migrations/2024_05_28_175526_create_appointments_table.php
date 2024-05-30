<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('AppointmentNumber', 10);
            $table->string('Name');
            $table->string('MobileNumber', 10);
            $table->string('Email');
            $table->date('AppointmentDate');
            $table->time('AppointmentTime');
            $table->string('Specialization');
            $table->string('Doctor', 10);
            $table->text('Message')->nullable();
            $table->timestamp('ApplyDate');
            $table->string('Remark')->nullable();
            $table->string('Status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
