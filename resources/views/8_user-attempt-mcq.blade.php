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
    <div class="bg-gray-100 w-full min-h-screen">
        <div class="flex flex-col items-center">
            <h2 class="text-lime-900 text-2xl font-bold font-serif mt-30">{{$quizname}}</h2>
            <p  class="text-green-700 text-xl font-bold font-serif mt-5">The Quiz container <span class="font-mono text-2xl text-red-600">{{$quizCount}}</span> Questions and no limit to attempt this Quiz</p>
            <h3 class="text-green-700 text-xl font-bold font-serif mt-5">Good Luck</h3>

            @if(Session('user'))
            <button class="  text-xl font-serif mt-8 border border-lime-950 py-1 px-7 rounded-xl hover:bg-blue-500 hover:text-white transition text-yellow-800 ">
                    <a href="/mcq/{{session('firstmcq')->id}}/{{ $quizname }}">Start Quiz</a>
            </button>
            @else
            <button class="  text-xl font-serif mt-5 border border-lime-950 py-1 px-3 rounded-xl hover:bg-blue-500 hover:text-white transition text-yellow-800">
                    <a href="/user-signup-quiz">SignUp to Start Quiz</a>
            </button>
            <button class="  text-xl font-serif mt-5 border border-lime-950 py-1 px-3 rounded-xl hover:bg-blue-500 hover:text-white transition text-yellow-800">
                    <a href="/user-login-quiz">LogIn to Start Quiz</a>
            </button>
            @endif
        </div>
    </div>
</body>
</html>
<x-user-footer></x-user-footer>