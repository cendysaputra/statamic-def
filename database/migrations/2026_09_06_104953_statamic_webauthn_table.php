<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('webauthn', function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('user_id');
            $table->string('name');
            $table->json('credential')->nullable();
            $table->datetime('last_login')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('webauthn');
    }
};
