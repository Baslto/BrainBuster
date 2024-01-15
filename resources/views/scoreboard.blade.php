<x-layout>
    <div class="w-screen h-screen flex flex-col items-center justify-center relative">
        <h1 class="self-start w-full text-center text-5xl font-bold underline mb-12">Rangliste</h1>
        <div class="flex flex-col items-center gap-y-4  w-[800px] h-full mb-12">
            @for ($i = 0; $i < count($players); $i++)
                <div class="flex items-center bg-slate-600 w-2/3 rounded-xl text-white font-semibold px-4 py-4 relative">
                    <div class="mr-1">
                        {{$i + 1}}.
                    </div>
                    <div>
                        {{$players[$i]->name}}
                    </div>
                    <div class="absolute right-6 top-4">
                        Punkte: {{$players[$i]->score}}
                    </div>
                </div>
            @endfor
        </div>
        <a href="/play" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
    </div>
</x-layout>
