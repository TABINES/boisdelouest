<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function question()
    {
        return $this->hasOne(Question::class, 'answerId');
    }
}
