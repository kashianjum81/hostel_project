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
        Schema::create('checkavailabitlies', function (Blueprint $table) {
            $table->id();
            $table->string("bookingdate");
            $table->string("no_persons");
            $table->string("are_you_student");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkavailabitlies');
    }
};
