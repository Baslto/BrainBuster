<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('quiz-menu', ['categories' => $categories]);
    }

    public function myQuiz() {
        $quizes = Quiz::GetQuizesByUserID(Auth::id())->get();
        $categoriesAll = Category::all();
        foreach($quizes as $quiz) {
            $cs = Category::GetCategoryByID($quiz->category_id)->get();
            foreach($cs as $c) {
                $categories[] = $c->categoryName;
            }
        }
        return view('quiz-myquiz', compact('quizes', 'categories', 'categoriesAll'));
    }

    public function allQuiz() {
        $quizes = Quiz::all();
        foreach($quizes as $quiz) {
            $cs = Category::GetCategoryByID($quiz->category_id)->get();
            foreach($cs as $c) {
                $categories[] = $c->categoryName;
            }
        }
        return view('quiz-all', compact('quizes', 'categories'));
    }

    public function createQuiz(Request $request) {
        $quiz = Quiz::create([
            'title' => $request->quizTitle,
            'category_id' => $request->category,
            'user_id' => Auth::id(),
        ]);
        return view("creationStep2", ['title' => $request->quizTitle]);
    }

    public function createQuestion(Request $request) {
        $quiz_ids = Quiz::GetQuizIdByTitle($request->title)->get();
        
        foreach ($quiz_ids as $quiz_id) {
            $id = $quiz_id->id;
            Question::create([
                'question' => $request->question,
                'quiz_id' => $id,
            ]);
            return back();
        }
    }

    public function questionAll($id) {
        $quizes = Quiz::GetQuizByQuizId($id)->get();
        $questions = Question::GetQuestionsByQuizId($id)->get();
        return view('question-all', ['quizes' => $quizes, 'questions' => $questions]);
    }

    public function answersAll($quizid, $id) {
        $answers = Answer::GetAnswersByQuestionId($id)->get();
        $questions = Question::GetQuestionsById($id)->get();
        return view('answers-all', ['answers' => $answers, 'questions' => $questions]);
    }

    public function createAnswer(Request $request) {
        $b = $request->bool;
        if($b != 'on') {
            $bool = 0;
        } else {
            $bool = 1;  
        }
        Answer::create([
            'answer' => $request->answer,
            'bool' => $bool,
            'question_id' => $request->questionid
        ]);
        return back();
    }

    public function playQuiz($id) {
        $quizes = Quiz::GetQuizByQuizId($id)->get();
        $questions = Question::GetQuestionsByQuizId($id)->get();
        foreach ($questions as $question) {
            $answers[] = Answer::GetAnswersByQuestionId($question->id)->get();
        }
        return view('quiz-play', compact('quizes', 'questions', 'answers'));
    }

    public function checkAnswers(Request $request) {
        $correctCount = 0;
        $score = 0;
        $newScore = 0;
        $quizes = Quiz::GetQuizByQuizId($request->quizid)->get();
        $questions = Question::GetQuestionsByQuizId($request->quizid)->get();
        $questionAmount = count($questions);
        foreach ($questions as $question) {
            $answers[] = Answer::GetAnswersByQuestionId($question->id)->get();
        }
        $currentAnswers = $request->except('_token', 'quizid');
        for ($i=0; $i < count($questions); $i++) { 
            foreach ($answers[$i] as $answer) {
                if ($answer->bool == 1) {
                    $correctAnswers[] = $answer->id;   
                }
            }
            if ($currentAnswers[$i] == $correctAnswers[$i]){
                $correctCount++;
                $score += 10;
            }
        }

        $users = User::where('id', Auth::id())->get();;
        
        foreach ($users as $user) {
            $newScore = $user->score + $score;
        }
        User::where('id', Auth::id())->update(array('score' => $newScore));
        
        
        return view('quiz-finished', ['correctCount' => $correctCount, 'score' => $score, 'questionAmount' => $questionAmount]);
    }

    public function leaderboard() {
        $players = User::orderBy('score', 'DESC')->get();
        
        return view('scoreboard', ['players' => $players]);
    }
}
