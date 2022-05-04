<?php

namespace App\Models\Client\Questionnaire;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public $table = 'questionnaire_answers';

    public $timestamps = false;

    protected $fillable = ['questionnaire_id','purpose_survey','answer','type'];
}
