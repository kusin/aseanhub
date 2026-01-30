<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_urban_design', function (Blueprint $table) {
            $table->id('id_urban_design');
            $table->unsignedBigInteger('id_participants');
            $table->string('design_title');
            $table->text('design_description')->nullable();
            $table->text('design_presentation')->nullable();
            $table->string('images_1')->nullable();
            $table->string('images_2')->nullable();
            $table->string('images_3')->nullable();
            $table->string('videos_1')->nullable();
            $table->string('videos_2')->nullable();
            $table->string('videos_3')->nullable();
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_participants')
                ->references('id_participants')
                ->on('tb_participants')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_urban_design');
    }
};
