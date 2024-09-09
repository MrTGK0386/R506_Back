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
            $table->ForeignIdFor(App\Models\Type::class,'from_type_id')->constrained()->OnDelete('cascade');
            $table->ForeignIdFor(App\Models\Type::class,'to_type_id')->constrained()->OnDelete('cascade');
            $table->ForeignIdFor(App\Models\TypeInteractionState::class)->constrained()->OnDelete('cascade');
            $table->timestamps();

            $table->unique(['type_interaction_id', 'interaction_state_id']);
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
