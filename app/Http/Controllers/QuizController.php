<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create() {
        return view('quiz-menu');
    }

    public function myQuiz() {
        return view('quiz-myquiz');
    }

    public function allQuiz() {
        return view('quiz-all');
    }

    public function createQuiz() {
        return view('quiz-creation');
    }
}
