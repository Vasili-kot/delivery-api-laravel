<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade');
            $table->string('from'); // "откуда"
            $table->string('to');   // "куда"
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
