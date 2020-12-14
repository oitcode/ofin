<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_entry', function (Blueprint $table) {
            $table->bigIncrements('inventory_entry_id');

            /*
             * Foreign key to product table.
             */
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'fk_inventory_entry_product')
                ->references('product_id')->on('product');

            /*
             * Foreign key to salesbook_entry_item table.
             */
            $table->unsignedBigInteger('salesbook_entry_item_id');
            $table->foreign('salesbook_entry_item_id', 'fk_inventory_entry_salesbook_entry_item')
                ->references('salesbook_entry_item_id')->on('salesbook_entry_item');


            $table->integer('count');
            $table->string('direction');
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
        Schema::dropIfExists('inventory_entry');
    }
}
