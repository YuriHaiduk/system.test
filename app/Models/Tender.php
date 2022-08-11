<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $dates = ['delivery_date', 'deadline'];

    protected $fillable = ['description', 'budget', 'delivery_date', 'deadline'];

    public function offers() {
        return $this->hasMany(Offer::class);
    }
}
