<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Attempt Mcq</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>
    <div class="bg-gray-50 w-full min-h-screen">
        <div class="flex flex-col items-center">
            <h2 class="text-cyan-900 text-3xl font-bold font-serif mt-10">{{$quizname}}</h2>
            <h3 class="text-green-700 font-bold font-serif text-xl mt-3">
                Question {{ $currentQuiz['currentMcq'] }} of {{ $currentQuiz['totalMcq'] }}
            </h3>
                <div class="border  border-amber-200 rounded-2xl p-7 space-y-3 bg-cyan-100 mt-5 shadow-lg">
                    <div class=" text-base font-normal font-serif m-7 ">
                        <h1 class="font-bold mb-5 mt-5">Q {{ $currentQuiz['currentMcq'] }}. {{ $mcqdata->question }}</h1>
                            <form action="/submit-next/{{$mcqdata->id}}" class="space-y-7 text-black" method="post" >
                                @csrf
                                <input type="hidden" name="id" value="{{$mcqdata->id}}">
                                <div class="text-base font-normal font-serif rounded-xl p-2 border border-amber-100 shadow-lg hover:bg-sky-200 transition cursor-pointer bg-amber-300 " onclick="document.getElementById('option1').click()" >
                                    <input type="radio" name="answer" id="option1" value="option-a">
                                    <label for="option1" class="cursor-pointer">
                                        {{ $mcqdata->option_a }}
                                    </label>
                                </div>

                                <div class="text-base font-normal font-serif rounded-xl p-2 border border-amber-200 shadow-lg hover:bg-sky-200 transition cursor-pointer bg-amber-300 " onclick="document.getElementById('option2').click()">
                                    <input type="radio" name="answer" id="option2" value="option-b">
                                    <label for="option2" class="cursor-pointer">
                                        {{ $mcqdata->option_b }}
                                    </label>
                                </div>

                                <div class="text-base font-normal font-serif rounded-xl p-2  border border-amber-200 shadow-lg hover:bg-sky-200 transition cursor-pointer bg-amber-300 " onclick="document.getElementById('option3').click()">
                                    <input type="radio" name="answer" id="option3" value="option-c">
                                    <label for="option3" class="cursor-pointer">
                                        {{ $mcqdata->option_c }}
                                    </label>
                                </div>

                                <div class="text-base font-normal font-serif rounded-xl p-2 border border-amber-200 shadow-lg hover:bg-sky-200 transition cursor-pointer bg-amber-300" onclick="document.getElementById('option4').click()">
                                    <input type="radio" name="answer" id="option4" value="option-d">
                                    <label for="option4" class="cursor-pointer">
                                        {{ $mcqdata->option_d }}
                                    </label>
                                </div>
                                <button class="w-full bg-blue-900 rounded-2xl py-1 hover:bg-blue-700 text-white text-lg cursor-pointer">
                                    Submit Answer and Next
                                </button>
                            </form>
                    </div>
                </div>


        </div>
    </div>
</body>
</html>
<x-user-footer></x-user-footer>
