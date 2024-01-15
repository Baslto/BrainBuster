<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
        'question_id',
        'bool'
    ];


    public function scopeGetAnswersByQuestionId(Builder $query, $id): void {
        $query->where('question_id', $id);
    }

    public $timestamps = false;
}
