<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'client_address';

    protected $fillable = [
        'client_id',
        'city',
        'street',
        'house',
        'frame',
        'quarter',
        'type',
    ];
}
