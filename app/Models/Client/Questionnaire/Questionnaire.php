<?php

namespace App\Models\Client\Questionnaire;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    public $table = 'client_questionnaires';

    public $timestamps = false;
    
    protected $fillable = ['purpose_survey','state_of_health','name_medicine','purpose_admission'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
