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
        <x-navber name={{$name}}></x-navber>
        <div class=" bg-gray-100 flex flex-col items-center max-h-screen  pt-3 ">
            <div>
                <h1 class="text-2xl text-amber-700 mb-5 mt-7 font-medium font-serif">📚 Show Quiz: {{$category}} 
                    <a href="/admin-categories" class="text-red-500 text-sm mt-0.5 font-serif hover:underline">Back Quiz</a>

                </h1>
                <!-- add categories table items -->
                <ul class="border border-gray-200 font-serif">
                    <li class="p-2 font-bold">
                        <ul class="flex justify-around text-bold">
                            <li class="w-30">Quiz no.</li>
                            <li class="w-30">Quiz Id</li>
                            <li class="w-135">Name</li>
                            <li class="w-32">Action</li>
                            
                        </ul>
                    </li>
                    @foreach($quizdata as $key=>$item)
                    <li class="even:bg-gray-300 p-2">
                        <ul class="flex justify-around">
                            <li class="w-30">{{$key+1}}</li>
                            <li class="w-30 font-sans">{{$item->id}}</li>
                            <li class="w-140">{{$item->name}}</li>
                            <li class="w-28">
                                <a href="/show-quiz/{{$item->id}}/{{$item->name}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#0000F5"><path d="M599-361q49-49 49-119t-49-119q-49-49-119-49t-119 49q-49 49-49 119t49 119q49 49 119 49t119-49Zm-187-51q-28-28-28-68t28-68q28-28 68-28t68 28q28 28 28 68t-28 68q-28 28-68 28t-68-28ZM220-270.5Q103-349 48-480q55-131 172-209.5T480-768q143 0 260 78.5T912-480q-55 131-172 209.5T480-192q-143 0-260-78.5ZM480-480Zm207 158q95-58 146-158-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58q112 0 207-58Z"/></svg>
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