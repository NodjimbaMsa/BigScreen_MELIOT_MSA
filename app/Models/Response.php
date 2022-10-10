<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
        'question_id',
        'respodent_id'
    ];

    protected $searchableFields = ['*'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function respondent() {
        return $this->belongsTo(Respondent::class, 'respondentId');
    }

    public static function getAll()
    {
        $responses = self::all();
        return $responses;
    }

    public static function getByQuestionId($idQuestion)
    {
        $responses = self::where('questionId', $idQuestion)->get();
        return $responses;
    }

    public static function getByRespondentId($idRespondent)
    {
        $responses = self::where('respondent_id',$idRespondent)->get();
        return $responses;
    }
}
