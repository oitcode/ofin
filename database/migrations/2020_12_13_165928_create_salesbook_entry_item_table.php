<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesbookEntryItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesbook_entry_item', function (Blueprint $table) {
            $table->bigIncrements('salesbook_entry_item_id');

            /*
             * Foreign key to salesbook_entry table.
             */
            $table->unsignedBigInteger('salesbook_entry_id');
            $table->foreign('salesbook_entry_id', 'fk_salesbook_entry_item_salesbook_entry')
                ->references('salesbook_entry_id')->on('salesbook_entry');

            /*
             * Foreign key to product table.
             */
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'fk_salesbook_entry_item_product')
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
        Schema::dropIfExists('salesbook_entry_item');
    }
}
