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
        Schema::create('timeWorked', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->date('date');
            $table->enum('type', ['verlof', 'gewerkt']);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('timeWorked', function (Blueprint $table) {
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
        //
    }
};
