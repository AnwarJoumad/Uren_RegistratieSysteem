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
        Schema::create('timeworked', function (Blueprint $table) {
            $table->id();
            $table->Time('start_time');
            $table->Time('end_time');
            $table->decimal('break_time');
            $table->decimal('total_time');
            $table->decimal('time_worked');
            $table->date('date');
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('timeWorked', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->references('id')->on('users');
        });
        Schema::table('timeWorked', function (Blueprint $table) {
            $table->foreignId('task_id')
                ->references('id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_worked');
    }
};
