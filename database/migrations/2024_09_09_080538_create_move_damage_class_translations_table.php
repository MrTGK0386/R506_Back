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
        Schema::create('move_damage_class_translations', function (Blueprint $table) {
            $table->id();
            $table->ForeignIdFor(App\Models\MoveDamageClass::class)->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();

            $table->unique(['move_damage_class_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('move_damage_class_translations');
    }
};
