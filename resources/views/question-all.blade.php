<x-layout>
    <div class="w-screen h-screen bg-[url('background-gameshow.png')] bg-cover text-center pt-4 relative">
        <h1 class="text-4xl font-bold mb-6 text-black">Fragen</h1>
        <div class="flex flex-col items-center flex-wrap gap-y-4 w-2/3 mx-auto px-4 text-left">
            @for ($i = 0; $i < count($questions); $i++)
                <div class="flex items-center bg-slate-600 w-fit rounded-xl text-white font-semibold px-4 py-4 relative">
                    <div class="text-2xl max-w-[800px]">
                        {{$questions[$i]->question}}
                    </div>
                    <a href="{{ URL::to("/myQuiz/{$quizes[0]->id}/{$questions[$i]->id}")}}" class="ml-4 h-fit rounded bg-green-500 hover:bg-green-700 py-2 px-4">Bearbeiten</a>
                </div>
            @endfor
        </div>
        <a href="/myQuiz" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
        <button id="createQuestionButton" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white absolute bottom-4 right-6">Frage erstellen</button>
        <div id="createQuestionModal" class="flex items-center justify-center w-full h-full bg-black/60 absolute top-0 z-30 hidden">
            <div class="flex items-center justify-center w-[400px] h-[200px] bg-slate-800 rounded relative">
                <form action="/createQuestion" method="post" class="flex flex-col gap-y-2">
                    @csrf
                    <div class="flex flex-col">
                        <label for="" class="text-white self-start">Frage:</label>
                        <input type="text" name="question">
                    </div>
                    <input type="hidden" name="title" value="{{$quizes[0]->title}}">
                    <div class="absolute bottom-4 right-6">
                        <button id="createQuestion" type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white">Frage erstellen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
