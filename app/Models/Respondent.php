<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Respondent extends Model
{

    use HasFactory;

    protected $fillable = [
        'email'
    ];


    public function responses() {
        return $this->hasMany(Response::class);
    }

    public static function getById($id)
    {
        $respondent = self::where('id',$id)->first();
        return $respondent;
    }

    public static function getByEmail($email)
    {
        $respondent = self::where('email',$email)->first();
        return $respondent;
    }




}
