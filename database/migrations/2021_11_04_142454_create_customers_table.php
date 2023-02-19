<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('phone');
            $table->string('address');
            $table->string('status');
            $table->string('qty1');
            $table->string('desc1');
            $table->float('unit1');
            $table->string('amount1');
            $table->string('qty2')->nullable();
            $table->string('desc2')->nullable();
            $table->float('unit2')->nullable();
            $table->string('amount2')->nullable();
            $table->string('qty3')->nullable();
            $table->string('desc3')->nullable();
            $table->float('unit3')->nullable();
            $table->string('amount3')->nullable();
            $table->string('qty4')->nullable();
            $table->string('desc4')->nullable();
            $table->float('unit4')->nullable();
            $table->string('amount4')->nullable();
            $table->string('qty5')->nullable();
            $table->string('desc5')->nullable();
            $table->float('unit5')->nullable();
            $table->string('amount5')->nullable();
            $table->string('qty6')->nullable();
            $table->string('desc6')->nullable();
            $table->float('unit6')->nullable();
            $table->string('amount6')->nullable();
            
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
        Schema::dropIfExists('customers');
    }
}
