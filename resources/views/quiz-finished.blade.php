<x-layout>
    <div class="w-screen h-screen flex flex-col items-center justify-center relative">
        <div class="text-5xl font-bold mb-6">
            Herzlichen Glückwunsch!
        </div>
        <div class="text-xl">
            Du hast <span class="text-green-500 font-semibold">{{$correctCount}}</span> von <span class="font-semibold">{{$questionAmount}}</span> Fragen richtig beantwortet!
        </div>
        <div class="text-xl">
            Dein Score erhöht sich dadurch um <span class="text-2xl text-red-500 font-semibold">{{$score}}</span> Punkte.
        </div>
        <a href="/play" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
    </div>
</x-layout>
