
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="font-serif">
    <x-user-navber></x-user-navber>
        <div class=" mt-10 flex flex-col min-h-screen items-center w-full ">
            <h1 class="font-medium text-xl text-amber-800 text-center">📚 Categories </h1>
            <ul class="border border-red-900 mt-5 rounded-2xl">
                <li class="font-bold p-2">
                    <ul class="flex  justify-between">
                        <li class="w-40 pl-2">Sl no.</li>
                        <li class="w-60 pl-4">Category </li>
                        <li class="w-40">Action</li>
                    </ul>
                </li>
                @foreach($Categories as $key=>$Categorie)
                <li class="even:bg-yellow-300 p-2 pl-9">
                    <ul class="flex justify-between">
                        <li class="w-40 ">{{$key+1}}</li>
                        <li class="w-60">{{$Categorie->name}}</li>                     
                        <li class="w-40 pl-5">
                            <a href="user-show-list/{{$Categorie->name}}/{{$Categorie->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M599-361q49-49 49-119t-49-119q-49-49-119-49t-119 49q-49 49-49 119t49 119q49 49 119 49t119-49Zm-187-51q-28-28-28-68t28-68q28-28 68-28t68 28q28 28 28 68t-28 68q-28 28-68 28t-68-28ZM220-270.5Q103-349 48-480q55-131 172-209.5T480-768q143 0 260 78.5T912-480q-55 131-172 209.5T480-192q-143 0-260-78.5ZM480-480Zm207 158q95-58 146-158-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58q112 0 207-58Z"/></svg>
                            </a>
                           
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
            <div class=" flex flex-row justify-between items-center mt-8 ">
                {{$Categories->links()}}
            </div>
        </div>
    </div>
   
</body>
</html>

 <x-user-footer></x-user-footer>