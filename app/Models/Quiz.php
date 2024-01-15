<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public $table = "quizes";

    protected $fillable = [
        'title',
        'category_id',
        'user_id',
    ];

    public $timestamps = false;

    public function scopeGetQuizByQuizId(Builder $query, $id): void {
        $query->where('id', $id);
    }

    public function scopeGetQuizesByUserID(Builder $query, $userid): void {
        $query->where('user_id', $userid);
    }

    public function scopeGetQuizIdByTitle(Builder $query, $title): void {
        $query->where('title', $title);
    }
}
