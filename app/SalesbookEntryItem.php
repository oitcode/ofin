<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesbookEntryItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'salesbook_entry_item';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'salesbook_entry_item_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salesbook_entry_id',
        'product_id',
        'price',
        'quantity',
        'amount',
        'comment',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */
    
    /*
     * salesbook_entry table.
     *
     */
    public function salesbookEntry()
    {
        return $this->belongsTo('App\SalesbookEntry', 'salesbook_entry_id', 'salesbook_entry_id');
    }

    /*
     * product table.
     *
     */
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'product_id');
    }

    /*
     * product table.
     *
     */
    public function inventoryEntry()
    {
        return $this->hasOne('App\InventoryEntry', 'salesbook_entry_item_id', 'salesbook_entry_item_id');
    }
}
