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
        Schema::create('moves', function (Blueprint $table) {
            $table->id();
            $table->integer('accuracy');
            $table->ForeignIdFor(App\Models\Move::class)->constrained()->onDelete('cascade');
            $table->integer('power');
            $table->integer('pp');
            $table->integer('priority');
            $table->ForeingIdFor(App\Models\Types::class);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moves');
    }
};
