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
        Schema::create('type_interactions', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('from_type_id')->constrained('types')->OnDelete('cascade');
            $table->ForeignId('to_type_id')->constrained('types')->OnDelete('cascade');
            $table->ForeignIdFor(App\Models\TypeInteractionState::class)->constrained()->OnDelete('cascade');
            $table->timestamps();

            $table->unique(['from_type_id', 'to_type_id'],'type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_interactions');
    }
};
