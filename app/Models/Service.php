<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

}
