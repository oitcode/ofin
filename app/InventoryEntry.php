<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryEntry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory_item';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'inventory_item_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'salesbook_entry_item_id',
        'count',
        'direction',
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
     * salesbook_entry_item table.
     *
     */
    public function salesbookEntryItem()
    {
        return $this->belongsTo('App\SalesbookEntryItem', 'salesbook_entry_item_id', 'salesbook_entry_item_id');
    }
}
