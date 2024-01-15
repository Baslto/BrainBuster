<x-layout>
    <div class="w-screen h-screen relative">
        <div class="text-5xl text-center font-bold mb-8 underline">
            {{$quizes[0]->title}}
        </div>
        <div class="">
            <form action="/checkAnswers" method="post">
                @csrf
            <!-- Slider main container -->
            <div class="swiper w-[800px]">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 0; $i < count($questions); $i++)
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center w-[800px] h-fit mx-auto">
                                <div class="text-2xl font-bold mb-4">
                                    {{$questions[$i]->question}}
                                </div>
                                <div class="flex flex-wrap justify-center gap-y-4 gap-x-4">
                                    @foreach ($answers[$i] as $answer)
                                    <div class="flex bg-slate-500 w-1/3 rounded-xl text-white font-semibold px-4 py-4 relative">
                                        {{$answer->answer}}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="flex flex-col mt-6 text-xl">
                                    <label for="{{$i}}">Wähle deine Antwort aus</label>
                                    <select name="{{$i}}" id="" class="bg-slate-500 text-white rounded">
                                        @foreach ($answers[$i] as $answer)
                                            <option value="{{$answer->id}}">{{$answer->answer}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endfor
                    </div>
                </div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <input type="hidden" name="quizid" id="" value="{{$quizes[0]->id}}">
                <div class="absolute bottom-4 right-6">
                    <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8 text-white">Abschließen</button>
                </div>
                </form>
            </div>
        </div>
        <a href="/play" class="absolute top-4 left-6 bg-slate-800/90 text-white font-semibold rounded-md p-4">
            Zurück
        </a>
    </div>
</x-layout>
