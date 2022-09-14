<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Response extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'question_id',
        'response_text',
        'responseable_id',
        'responseable_type',
    ];

    protected $searchableFields = ['*'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
