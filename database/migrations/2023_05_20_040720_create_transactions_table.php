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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('transcode')->autoIncrement();
            $table->timestamp('transdate')->useCurrent();
            $table->ForeignId('custname')-> constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('totalroomprice');
            $table->integer('totalextracharge');
            $table->integer('finaltotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
