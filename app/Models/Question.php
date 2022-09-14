<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['order', 'title', 'type', 'slug '];

    protected $searchableFields = ['*'];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
