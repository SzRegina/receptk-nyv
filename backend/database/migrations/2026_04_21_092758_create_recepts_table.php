<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('receptek', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->constrained('kategoriak')->cascadeOnDelete();
            $table->string('kep_eleresi_ut');
            $table->text('leiras');
            $table->date('datum')->default(DB::raw('CURRENT_DATE'));
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('receptek');
    }
};