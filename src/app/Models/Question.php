<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'answerId');
    }
}
