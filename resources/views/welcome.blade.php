<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="font-serif">
    <x-user-navber></x-user-navber>
    <div class="flex flex-col min-h-screen items-center bg-rose-50 ">
        <h1 class="text-neutral-950 text-2xl mt-10 font-medium hover:text-cyan-500 cursor-pointer">Boost Your Skills</h1>
        <div class="w-full max-w-md">
            <form action="search-quiz" method="get">
                <div class="relative mt-8">
                    <input type="text" name="search" placeholder="Search quiz...." class="bg-white p-4 w-full rounded-xl outline-none border border-neutral-300 shadow-xl">
                    <button class="absolute right-3 top-1 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="25px" fill="#000000"><path d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z"/></svg>
                    </button>
                </div>    
            </form>
        </div>
        <div class="w-180  mt-15">
            <h1 class="font-medium text-xl text-amber-800 text-center">📚 Category List  </h1>
            <ul class="border border-blue-900 mt-5 rounded-2xl">
                <li class="font-bold p-2">
                    <ul class="flex  justify-between">
                        <li class="w-45 pl-2">Sl no.</li>
                        <li class="w-62 pl-4">Category</li>
                        <li class="w-60 pl-4">Total Quiz</li>
                        <li class="w-40">Action</li>
                    </ul>
                </li>
                @foreach($Categories as $key=>$Categorie)
                <li class="even:bg-orange-300 p-2 pl-9">
                    <ul class="flex justify-between">
                        <li class="w-40 ">{{$key+1}}</li>
                        <li class="w-60">{{$Categorie->name}}</li>
                        <li class="w-45">{{$Categorie->results_count}}</li>
                        <li class="w-40 pl-5">
                            <a href="user-show-list/{{$Categorie->name}}/{{$Categorie->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M599-361q49-49 49-119t-49-119q-49-49-119-49t-119 49q-49 49-49 119t49 119q49 49 119 49t119-49Zm-187-51q-28-28-28-68t28-68q28-28 68-28t68 28q28 28 28 68t-28 68q-28 28-68 28t-68-28ZM220-270.5Q103-349 48-480q55-131 172-209.5T480-768q143 0 260 78.5T912-480q-55 131-172 209.5T480-192q-143 0-260-78.5ZM480-480Zm207 158q95-58 146-158-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58q112 0 207-58Z"/></svg>
                            </a>
                           
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
        <div class=" bg-rose-50 flex flex-col items-center min-h-screen ">
            <div class="">
                <h1 class="text-2xl text-amber-700 mb-9  font-medium font-serif text-center ">📚 Top Quiz List
                </h1>
                <!-- add categories table items -->
                <ul class="border border-amber-900 font-serif w-280 rounded-2xl ">
                    <li class="p-2 font-bold">
                        <ul class="flex justify-around text-bold">
                            <li class="w-23 text-center">Quiz no.</li>
                            <!-- <li class="w-25 text-center">Quiz Id</li> -->
                            <li class="w-125 text-center">Name</li>
                            <li class="w-25 text-center">Total MCQ</li>
                            <li class="w-25 text-center">Action</li>
                            
                        </ul>
                    </li>
                    @foreach($quizdata as $key=>$item)
                    <li class="even:bg-pink-300 p-2  ">
                        <ul class="flex justify-around">
                            <li class="w-25 text-center">{{$key+1}}</li>
                            <!-- <li class="w-25 font-sans text-center">{{$item->id}}</li> -->
                            <li class="w-125 text-center">{{$item->name}}</li>
                            <li class="w-25 text-center">{{$item->mcq_count}}</li>
                            <li class="w-25 mr-4 text-center">
                                <a href="/user-mcq/{{$item->id}}/{{Str_replace(' ','-',$item->name)}}" class="text-green-700 font-bold text-sm">
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