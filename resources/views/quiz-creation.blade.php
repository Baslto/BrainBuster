<x-layout>
    <div class="flex h-screen items-center justify-center bg-[url('background-gameshow.png')] bg-cover relative">
        <div class="rounded-xl w-[90%] h-[90%] bg-slate-800/90 text-white font-semibold px-12 py-8 text-xl relative">
            <h1 class="text-4xl mb-4 underline">Erstelle dein Quiz</h1>
            <form action="createQuiz" method="POST" class="flex flex-col gap-y-2">
                @csrf
                <div class="w-[300px] flex flex-col gap-y-1">
                    <div class="flex flex-col gap-y-1">
                        <label for="title">Quiz Titel</label>
                        <input  type="text" name="title" id="title" class="rounded text-black pl-1">
                    </div>
                    <div class="flex flex-col gap-y-1 mb-4">
                        <label for="category">Kategorie</label>
                        <select name="category" id="category" class="text-black rounded">
                            <option value="Bitte Wählen" selected="selected">Bitte Wählen</option>
                            <option value="Sport">Sport</option>
                            <option value="Geographie">Geographie</option>
                            <option value="Autos">Autos</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <div class="flex flex-col gap-y-1 relative border-b border-white">
                            <div class="question-toggle cursor-pointer absolute top-3 right-2">
                                <img src="plus-solid.svg" alt="" class="creation-plus">
                                <img src="minus-solid.svg" alt="" class="hidden creation-minus"> 
                            </div>
                            <label for="question1" class="mb-1">Frage 1</label>
                            <div class="question-container w-full mb-2 hidden gap-y-1">
                                <input  type="text" name="question1" id="question1" class="rounded text-black pl-1 w-full">
                                <div class="flex flex-col">
                                    <label for="q1Answer1">Antwort 1</label>
                                    <input type="text" name="q1Answer1" id="q1Answer1" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q1Answer2">Antwort 2</label>
                                    <input type="text" name="q1Answer2" id="q1Answer2" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q1Answer3">Antwort 3</label>
                                    <input type="text" name="q1Answer3" id="q1Answer3" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q1Answer4">Antwort 4</label>
                                    <input type="text" name="q1Answer4" id="q1Answer4" class="rounded text-black pl-1 w-full">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 relative border-b border-white">
                            <div class="question-toggle cursor-pointer absolute top-3 right-2">
                                <img src="plus-solid.svg" alt="" class="creation-plus">
                                <img src="minus-solid.svg" alt="" class="hidden creation-minus"> 
                            </div>
                            <label for="question1" class="mb-1">Frage 2</label>
                            <div class="question-container w-full mb-2 hidden gap-y-1">
                                <input  type="text" name="question1" id="question1" class="rounded text-black pl-1 w-full">
                                <div class="flex flex-col">
                                    <label for="q2Answer1">Antwort 1</label>
                                    <input type="text" name="q2Answer1" id="q2Answer1" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q2Answer2">Antwort 2</label>
                                    <input type="text" name="q2Answer2" id="q2Answer2" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q2Answer3">Antwort 3</label>
                                    <input type="text" name="q2Answer3" id="q2Answer3" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q2Answer4">Antwort 4</label>
                                    <input type="text" name="q2Answer4" id="q2Answer4" class="rounded text-black pl-1 w-full">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 relative border-b border-white">
                            <div class="question-toggle cursor-pointer absolute top-3 right-2">
                                <img src="plus-solid.svg" alt="" class="creation-plus">
                                <img src="minus-solid.svg" alt="" class="hidden creation-minus"> 
                            </div>
                            <label for="question1" class="mb-1">Frage 3</label>
                            <div class="question-container w-full mb-2 hidden gap-y-1">
                                <input  type="text" name="question3" id="question3" class="rounded text-black pl-1 w-full">
                                <div class="flex flex-col">
                                    <label for="q3Answer1">Antwort 1</label>
                                    <input type="text" name="q3Answer1" id="q3Answer1" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q3Answer2">Antwort 2</label>
                                    <input type="text" name="q3Answer2" id="q3Answer2" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q3Answer3">Antwort 3</label>
                                    <input type="text" name="q3Answer3" id="q3Answer3" class="rounded text-black pl-1 w-full">
                                </div>
                                <div class="flex flex-col">
                                    <label for="q3Answer4">Antwort 4</label>
                                    <input type="text" name="q3Answer4" id="q3Answer4" class="rounded text-black pl-1 w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-6 right-8">
                    <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-700 cursor-pointer py-1 px-6">Erstellen</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
