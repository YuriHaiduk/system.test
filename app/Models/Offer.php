<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $dates = ['delivery_date'];

    protected $fillable = ['tender_id', 'supplier_id', 'price', 'description', 'delivery_date', 'quality'];

    public function tender() {
        return $this->belongsTo(Tender::class);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

}
