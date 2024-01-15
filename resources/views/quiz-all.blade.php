<x-layout>
    <div class="w-full h-screen bg-[url('background-gameshow.png')] bg-cover text-center pt-4 relative">
        <h1 class="text-4xl font-bold mb-6 text-white">Alle Quizes</h1>
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
                    </div>
                </div>
            @endfor
        </div>
        <a href="/play" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
</x-layout>