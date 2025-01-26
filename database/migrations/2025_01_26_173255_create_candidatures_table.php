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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('nationality');
            $table->string('levelofstudy')->nullable();
            $table->string('last_establishment')->nullable();
            $table->string('diplomas')->nullable();
            $table->string('transcripts')->nullable();
            $table->string('certificate')->nullable();
            $table->string('resume')->nullable();
            $table->string('identity_document')->nullable();
            $table->string('identity_document_type')->nullable();
            $table->string('state')->nullable();
            $table->foreignIdFor(\App\Models\Program::class);
            $table->foreignIdFor(\App\Models\AcademicYear::class);
            $table->text('program_info')->nullable(); // New field for program information
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
