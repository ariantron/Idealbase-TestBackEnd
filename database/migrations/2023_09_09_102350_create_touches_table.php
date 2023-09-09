<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('touches', function (Blueprint $table) {
            $table->id();
            $table->integer('touch_subject_id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('website')->nullable(false);
            $table->text('details')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('touches');
    }
};
