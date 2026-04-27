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
        Schema::createIfNotExists('StudentInfo', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('mname')->nullable();
            $table->string('fname');
            $table->date('bday')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_user_id')->nullable()->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('StudentInfo');
    }
};
