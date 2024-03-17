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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100); // 255
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();

            // More datatypes
            // $table->date('date');
            // $table->dateTime('date_time');
            // $table->time('time');

            // $table->decimal('amount')->nullable(); // 可空白
            // $table->double('double')->default(0); // 預設值
            // $table->float('float');
            // $table->integer('integer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
