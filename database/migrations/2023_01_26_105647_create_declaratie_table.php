<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaratie', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->decimal('amount');
            $table->date('date');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });

        Schema::table('declaratie', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declaratie');
    }
};
