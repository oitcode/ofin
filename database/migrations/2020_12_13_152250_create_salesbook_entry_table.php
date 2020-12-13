<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesbookEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesbook_entry', function (Blueprint $table) {
            $table->bigIncrements('salesbook_entry_id');

            $table->datetime('datetime');
            $table->string('buyer_name');

            /*
             * Foreign key to product table.
             */
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'fk_salesbook_entry_product')
                ->references('product_id')->on('product');


            $table->integer('price');
            $table->integer('quantity');
            $table->integer('amount');

            $table->string('comment')->nullable();
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
        Schema::dropIfExists('salesbook_entry');
    }
}
