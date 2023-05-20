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
        Schema::create('detailtransactions', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('transid')-> constrained('transactions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->ForeignId('roomid')-> constrained('rooms')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('days');
            $table->integer('subtotalroom');
            $table->integer('extracharge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransactions');
    }
};
