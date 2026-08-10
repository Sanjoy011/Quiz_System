<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categories</title>
        <script src="JS/script.js"></script>
        @vite('resources/css/app.css')
        
    </head>
    <body>
        <x-user-navber></x-user-navber>
        <div class=" bg-gray-100 flex flex-col items-center min-h-screen pt-3 ">
            <div class="">
                <h1 class="text-2xl text-amber-700 mb-5 mt-7 font-medium font-serif text-center ">📚 Search : {{$quiz}} 
                    

                </h1>
                <!-- add categories table items -->
                <ul class="border border-gray-200 font-serif w-200">
                    <li class="p-2 font-bold">
                        <ul class="flex justify-around text-bold">
                            <li class="w-33 text-center">Quiz no.</li>
                            <!-- <li class="w-25 text-center">Quiz Id</li> -->
                            <li class="w-100 text-center">Name</li>
                            <li class="w-45 text-center">Total MCQ</li>
                            <li class="w-30 text-center">Action</li>
                            
                        </ul>
                    </li>
                    @foreach($searchQuiz as $key=>$item)
                    <li class="even:bg-gray-300 p-2">
                        <ul class="flex justify-around">
                            <li class="w-33 text-center">{{$key+1}}</li>
                            <!-- <li class="w-25 font-sans text-center">{{$item->id}}</li> -->
                            <li class="w-100 text-center">{{$item->name}}</li>
                            <li class="w-36 text-center">{{$item->mcq_count}}</li>
                            <li class="w-27 mr-4 text-center">
                                <a href="/user-mcq/{{$item->id}}/{{$item->name}}" class="text-green-700 font-bold text-sm">
                                    Attempt Quix
                                </a>  
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html> 
<x-user-footer></x-user-footer>
