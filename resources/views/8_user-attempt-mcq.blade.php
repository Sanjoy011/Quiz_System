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
            <button class="  text-xl font-serif mt-5 border border-lime-950 p-3 rounded-xl hover:bg-blue-500 hover:text-white transition text-yellow-800">
                    <a href="/user-signup">LogIn/SignUp for Start Quiz</a>
            </button>
            

        </div>

    </div>
</body>
</html>
<x-user-footer></x-user-footer>