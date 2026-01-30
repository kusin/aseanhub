<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_judges', function (Blueprint $table) {
            $table->id('id_judges');
            $table->string('judges_name')->nullable();
            $table->string('origin_country')->nullable();
            $table->string('origin_institution')->nullable();
            $table->enum('judges_task', [
                'Assessment One',
                'Assessment Two',
                'Final Assessment',
            ])->default('Final Assessment');
            $table->string('judges_photo')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_judges');
    }
};
