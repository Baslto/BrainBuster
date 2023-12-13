<x-layout>
    <div class="flex h-screen items-center justify-center bg-[url('background-gameshow.png')] bg-cover">
        <div class="flex flex-col items-center bg-slate-600/90 text-white rounded-md w-[600px] h-[400px] pt-6">
            <h1 class="text-4xl font-semibold mb-20">BrainBuster</h1>
            <div class="flex flex-col text-xl font-semibold items-center justify-center gap-y-6">
                <a href="/play" class="hover:bg-red-500/70 hover:px-12 py-2 rounded">Spielen</a>
                <a href="/settings" class="hover:bg-red-500/70 hover:px-12 py-2 rounded">Einstellungen</a>
                <a href="/logout" class="hover:bg-red-500/70 hover:px-12 py-2 rounded">Logout</a>
            </div>
        </div>
    </div>
</x-layout>
