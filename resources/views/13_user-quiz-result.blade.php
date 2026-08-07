<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>
   <div class=" mt-10 flex flex-col items-center w-full min-h-screen font-serif ">
            <h1 class="font-medium text-xl text-red-800 text-center "> Quiz Result List </h1>
            <h3 class=" text-lg text-emerald-900 font-bold text-center mt-4"><span class="font-mono">{{$isCorrect}}</span> out of <span class="font-mono">{{count($resultdata)}}</span> Correct</h3>
            <ul class="border border-blue-900 mt-5 rounded-2xl py-3 w-200">
                <li class="font-bold p-2">
                    <ul class="flex  justify-between">
                        <li class="w-30 pl-2">Sl no.</li>
                        <li class="w-130 pl-4">Name</li>
                        <li class="w-32 pl-4 text-center mr-5">Result</li>
                    </ul>
                </li>
                @foreach($resultdata as $key=>$item)
                <li class="even:bg-yellow-200 p-2 pl-9 ">
                    <ul class="flex justify-between">
                        <li class="w-30 ">{{$key+1}}</li>
                        <li class="w-140">{{$item->question}}</li>
                        @if($item->currect_ans)
                        <li class="w-32 text-green-500 font-bold text-center mr-4">Correct</li>
                        @else
                        <li class="w-32 text-red-500 font-bold text-center mr-4">Incorrect</li>
                        @endif
                    </ul>
                </li>
                @endforeach
            </ul>
    </div>
</body>
</html>