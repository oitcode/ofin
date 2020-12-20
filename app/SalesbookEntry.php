<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesbookEntry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'salesbook_entry';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'salesbook_entry_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'datetime',
        'buyer_name',
        'product_id',
        'price',
        'quantity',
        'amount',
        'payment_status',
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
    public function salesbookEntryItems()
    {
        return $this->belongsTo('App\SalesbookEntryItem', 'salesbook_entry_id', 'salesbook_entry_id');
    }
}
