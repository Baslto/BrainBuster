<x-layout>
    <div class="w-full h-full relative bg-slate-600">
        <div class="absolute top-2 left-6 font-bold text-3xl">
            {{$title}}
        </div>
        
        <div class="absolute bottom-4 right-6">
            <button id="createQuestion" type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white">frage erstellen</button>
        </div>
    </div>
</x-layout>