<x-layout>
    <div class="w-full h-screen bg-[url('background-gameshow.png')] bg-cover text-center pt-4 relative">
        <h1 class="text-4xl font-bold mb-6 text-white">Meine Quizes</h1>
        <div class="flex flex-col gap-y-4 w-2/4 mx-auto px-4 text-left">
            @for ($i = 0; $i < count($quizes); $i++)
                <div class="flex flex-col bg-slate-600 rounded-xl text-white font-semibold px-4 py-4 relative">
                    <div class="text-2xl">
                        {{$quizes[$i]->title}}
                    </div>
                    <div>
                        {{$categories[$i]}}
                    </div>
                    <div class="flex gap-x-4 absolute top-6 right-4">
                        <a href="{{ URL::to("/play/{$quizes[$i]->id}")}}" class="rounded bg-green-500 hover:bg-green-700 py-2 px-4">Spielen</a>
                        <a href="{{ URL::to("/myQuiz/{$quizes[$i]->id}")}}" class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4">Bearbeiten</a>
                    </div>
                </div>
            @endfor
        </div>
        <a href="/play" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
        <button id="createQuizButton" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white absolute bottom-4 right-6">Quiz erstellen</button>
        <div id="createQuizModal2" class="flex items-center justify-center w-full h-full bg-black/60 absolute top-0 z-30 hidden">
            <div class="flex items-center justify-center w-[400px] h-[300px] bg-slate-800 rounded relative">
                <form action="/createQuiz" method="post" class="flex flex-col gap-y-2">
                    @csrf
                    <div class="flex flex-col text-white">
                        <label for="quizTitle" class="self-left">Quiz Titel</label>
                        <input type="text" name="quizTitle" class="text-black">
                    </div>
                    <div class="flex flex-col">
                        <label for="category" class="text-white font-semibold">Wähle eine Kategorie</label>
                        <select name="category" id="" class="w-2/4">
                            @foreach ($categoriesAll as $category)
                                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="absolute bottom-4 right-6">
                        <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white">Erstellen</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</x-layout>