<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'email',
        'dob',
        'phone_number',
        'foreign_passport',
        'passport_series',
        'passport_number',
        'passport_issued',
        'passport_d_issue',
        'type'
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function registration_address()
    {
        return $this->address()->where('type','registration');
    }

    public function residence_address()
    {
        return $this->address()->where('type','residence');
    }
}
