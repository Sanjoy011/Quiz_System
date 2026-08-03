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
            <h3 class="text-green-600 font-bold font-serif text-xl">Question no: <span class="text-red-500 font-mono">9</span></h3>
            
        </div>
    </div>
</body>
</html>
<x-user-footer></x-user-footer>
