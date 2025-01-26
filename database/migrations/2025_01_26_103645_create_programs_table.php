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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('niveau');
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('duration')->nullable();
            $table->text('conditions')->nullable();
            $table->string('program_info_pdf')->nullable(); // Add this line
            $table->foreignIdFor(App\Models\Program::class,'parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
