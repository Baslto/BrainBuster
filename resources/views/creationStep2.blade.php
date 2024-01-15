<x-layout>
    <div class="w-full h-screen flex items-center justify-center relative">
        <div class="flex flex-col bg-slate-600 w-[800px] h-[200px] px-4">
            <div class="font-bold text-3xl text-center">
                {{$title}}
            </div>
            <form action="createQuestion" method="post">
                @csrf
                <div class="flex flex-col">
                    <label for="">Frage</label>
                    <input type="text" name="question">
                </div>
                <input type="hidden" name="title" value="{{$title}}">
                <div class="absolute bottom-4 right-6">
                    <button id="createQuestion" type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white">Frage erstellen</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
