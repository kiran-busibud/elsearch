<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class test extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name', 'email', 'phone'];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    // public function toSearchableArray()
    // {
    //     $array = $this->toArray();

    //     $array['full_name'] = $this->getFullNameAttribute();

    //     return $array;
    // }
}