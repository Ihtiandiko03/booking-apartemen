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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_code');
            $table->string('customer_name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('qty')->unsigned()->default(1);
            $table->string('unit_name_snapshot');
            $table->enum('type', ['day', 'week', 'month', 'year']);
            $table->double('price')->default(0);
            $table->double('total_price')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['1', '2', '3', '4'])->default('1')->comment('1=Unpaid, 2=Paid, 3=Expired, 4=Cancel');
            $table->string('snap_token')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->bigInteger('unit_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
