<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'quiz_id',
    ];

    public $timestamps = false;

    public function scopeGetQuestionsByQuizId(Builder $query, $id): void {
        $query->where('quiz_id', $id);
    }

    public function scopeGetQuestionsById(Builder $query, $id):void {
        $query->where('id', $id);
    }
}
