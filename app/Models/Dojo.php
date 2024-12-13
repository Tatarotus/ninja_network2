<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    protected $fillable = ['name', 'location', 'description']; // need to be declared as protected, public, etc

    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function nijas()
    {
        return $this->hasMany(Ninja::class);
    }
}
