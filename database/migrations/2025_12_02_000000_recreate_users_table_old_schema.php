<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Recreate users table to match old schema
        Schema::dropIfExists('users');
        
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username')->unique();
            $table->string('contact')->nullable();
            $table->string('password');
            $table->unsignedInteger('role')->default(3);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            $table->foreign('role')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
