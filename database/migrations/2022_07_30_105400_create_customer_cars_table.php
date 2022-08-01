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
        Schema::create('customer_cars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')
                            ->nullable()
                            ->constrained()
                            ->onUpdate('cascade')
                            ->onDelete('cascade');

            $table->foreignId('car_id')
                            ->nullable()
                            ->constrained()
                            ->onUpdate('cascade')
                            ->onDelete('cascade');

            $table->foreignId('car_model_id')
                            ->nullable()
                            ->constrained()
                            ->onUpdate('cascade')
                            ->onDelete('cascade');

            $table->integer('delivery_id')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('customer_cars');
    }
};
