<x-layout>
    <div class="flex h-screen items-center justify-center bg-[url('background-gameshow.png')] bg-cover relative">
        <div class="flex flex-row flex-wrap gap-x-2 gap-y-2 w-[600px] h-[400px] text-white font-semibold">
            <a href="/myQuiz" class="w-[295px] h-[195px] bg-slate-800/90 rounded-md flex justify-center items-center text-4xl">Meine Quizze</a>
            <a href="/allQuiz" class="w-[295px] h-[195px] bg-slate-800/90 rounded-md flex justify-center items-center text-4xl">Alle Quizze</a>
            <button id="createButton" class="w-[295px] h-[195px] bg-slate-800/90 rounded-md flex justify-center items-center text-4xl">Quiz erstellen</button>
            <a href="/leaderboard" class="w-[295px] h-[195px] bg-slate-800/90 rounded md flex justify-center items-center text-4xl">Rangliste</a>
        </div>
        <a href="/main-menu" class="absolute top-8 left-8 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
        <div id="createQuizModal" class="flex items-center justify-center w-full h-full bg-black/60 absolute z-30 hidden">
            <div class="flex items-center justify-center w-[400px] h-[200px] bg-slate-800 rounded relative">
                <form action="/createQuiz" method="post" class="flex flex-col gap-y-2">
                    @csrf
                    <div class="flex flex-col text-white">
                        <label for="quizTitle">Quiz Titel</label>
                        <input type="text" name="quizTitle" class="text-black">
                    </div>
                    <div class="flex flex-col">
                        <label for="category" class="text-white font-semibold">Wähle eine Kategorie</label>
                        <select name="category" id="" class="w-2/4">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="absolute bottom-4 right-6">
                        <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-1 px-8 text-white">Fertig</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
