<x-layout>
    <div class="flex h-screen items-center justify-center bg-[url('background-gameshow.png')] bg-cover relative">
        <div class="rounded-xl w-[90%] h-[90%] bg-slate-800/90 text-white font-semibold px-12 py-8 text-xl relative">
            <h1 class="text-4xl mb-8 underline">Erstelle dein Quiz</h1>
            <form action="createQuiz" method="POST" class="flex flex-col gap-y-2">
                @csrf
                <div class="w-[300px] flex flex-col gap-y-1">
                    <div class="flex flex-col gap-y-1">
                        <label for="title">Quiz Titel</label>
                        <input  type="text" name="title" id="title" class="rounded">
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <label for="category">Kategorie</label>
                        <select name="category" id="category" class="text-black rounded">
                            <option value="Bitte Wählen" selected="selected">Bitte Wählen</option>
                            <option value="Sport">Sport</option>
                            <option value="Geographie">Geographie</option>
                            <option value="Autos">Autos</option>
                        </select>
                    </div>
                </div>
                <div class="absolute bottom-6 right-8">
                    <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-700 cursor-pointer py-1 px-6">Erstellen</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
