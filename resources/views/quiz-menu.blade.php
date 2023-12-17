<x-layout>
    <div class="flex h-screen items-center justify-center bg-[url('background-gameshow.png')] bg-cover relative">
        <div class="flex flex-row flex-wrap gap-x-2 gap-y-2 w-[600px] h-[400px] text-white font-semibold">
            <a href="/myQuiz" class="w-[295px] h-[195px] bg-slate-800/90 rounded-md flex justify-center items-center text-4xl">Meine Quizze</a>
            <a href="/allQuiz" class="w-[295px] h-[195px] bg-slate-800/90 rounded-md flex justify-center items-center text-4xl">Alle Quizze</a>
            <a href="/createQuiz" class="w-[295px] h-[195px] bg-slate-800/90 rounded-md flex justify-center items-center text-4xl">Quiz erstellen</a>
            <a href="/leaderboard" class="w-[295px] h-[195px] bg-slate-800/90 rounded md flex justify-center items-center text-4xl">Rangliste</a>
        </div>
        <a href="/main-menu" class="absolute top-8 left-8 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
    </div>
</x-layout>
