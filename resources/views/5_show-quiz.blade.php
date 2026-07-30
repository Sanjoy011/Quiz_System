<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Quiz</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    <x-navber name={{$name}}></x-navber>
   
    <!-- Add categories items -->
    <div class=" bg-gray-100 flex flex-col items-center max-h-screen  pt-3 ">
        <div>
            <h1 class="text-2xl text-amber-700 mb-5 mt-7 font-medium font-serif">📚 Show Questions:  <a href="/add-quiz" class="text-red-500 text-sm mt-0.5 font-serif hover:underline">Back Quiz</a></h1>
            <!-- add categories table items -->
            <ul class="border border-gray-300 font-serif">
                <li class="p-2 font-bold">
                    <ul class="flex justify-around text-bold">
                        <li class="w-30">Qs. no</li>
                        <li class="w-170">Question</li>
                        
                    </ul>
                </li>
                @foreach($mcqs as $mcq)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-around">
                        <li class="w-30">{{$mcq->id}}</li>
                        <li class="w-170">{{$mcq->question}}</li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
   
</body>
</html> 
 <x-footer></x-footer>