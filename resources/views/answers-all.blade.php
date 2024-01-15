<x-layout>
    
    <div class="w-screen h-screen bg-[url('background-gameshow.png')] bg-cover text-center pt-4 relative">
        <h1 class="text-4xl font-bold mb-6 text-black max-w-[900px] mx-auto">{{$questions[0]->question}}</h1>
        <div class="flex flex-col flex-wrap w-[500px] gap-y-4 mx-auto px-4 text-left">
            @forelse ($answers as $answer)
                        @if ($answer->bool == 1)
                        <div class="flex bg-green-500 w-full rounded-xl text-white font-semibold px-4 py-4 relative">
                            <div class="text-2xl">
                                {{$answer->answer}}
                            </div>
                        </div>
                        @else
                            <div class="flex bg-red-500 w-full rounded-xl text-white font-semibold px-4 py-4 relative">
                                <div class="text-2xl">
                                    {{$answer->answer}}
                                </div>
                            </div>
                        @endif
            @empty
                <div class="text-center text-red-500 text-2xl font-semibold mt-12">
                    Erstelle eine Antwort!
                </div>
            @endforelse
        </div>
        <a href="/myQuiz" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
        <button id="createAnswerButton" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white absolute bottom-4 right-6">Antwort erstellen</button>
        <div id="createAnswerModal" class="flex items-center justify-center w-full h-full bg-black/60 absolute top-0 z-30 hidden">
            <div class="flex items-center justify-center w-[400px] h-[200px] bg-slate-800 rounded relative">
                <form action="/createAnswer" method="post" class="flex flex-col gap-y-2">
                    @csrf
                    <div class="flex flex-col">
                        <label for="answer" class="text-white self-start">Antwort:</label>
                        <input type="text" name="answer">
                    </div>
                    <div class="flex">
                        <label for="bool" class="mr-2 text-white font-semibold">Ist diese Antwort richtig?</label>
                        <input type="checkbox" name="bool" id="">
                    </div>
                    <input type="hidden" name="questionid" value="{{$questions[0]->id}}">
                    <div class="absolute bottom-4 right-6">
                        <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white">Frage erstellen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

