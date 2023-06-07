<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('origin');
            $table->Integer('price');
            $table->timestamps(); 
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('computers');
    }
};
