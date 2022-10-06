<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'type', 'type','choices'];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public static function getAll()
    {
        $questions = self::all();
        return $questions;
    }

    public static function getById($id)
    {
        $question = self::where('id',$id)->first();
        return $question;
    }
}
