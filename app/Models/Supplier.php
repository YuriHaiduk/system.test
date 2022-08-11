<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'contact_person'];

    public function services()
    {
        return $this->belongsToMany(Service::class)->withTimestamps();
    }

    public function offers() {
        return $this->hasMany(Offer::class);
    }

}
