<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'email',
        'date',
    ];


    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['tenant_id'] = '1';
        return $array;
    }
}
