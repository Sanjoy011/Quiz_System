<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    @vite('resources/css/app.css')
</head>
<body class="font-serif bg-white">
    <x-navber name={{$name}}></x-navber>
    <div class=" mt-30 flex flex-col min-h-screen items-center max-w-screen ">
            <h1 class="font-medium text-xl text-amber-800 text-center flex space-x-3">
               <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#BD4C31"><path d="M0-240v-56.33q0-40.05 42.33-65.19 42.34-25.15 111.25-25.15 12.45 0 23.93.5 11.49.5 22.49 2.27-10 18.57-15 38.11-5 19.55-5 40.79v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-21.91-4.5-41.29t-14.17-37.56q11-1.82 22.28-2.32 11.29-.5 23.06-.5 69 0 111.16 24.68Q960-337.31 960-296.33V-240H780Zm-471.67-66.67H652v-4q-3.33-31.33-52.17-52Q551-383.33 480-383.33t-119.83 20.66Q311.33-342 308.33-310v3.33ZM153.04-420q-30.04 0-51.54-21.54T80-493.33q0-30.67 21.54-52 21.54-21.34 51.79-21.34 30.67 0 52 21.34 21.34 21.33 21.34 52.29 0 30.04-21.34 51.54Q184-420 153.04-420Zm653.34 0q-30.05 0-51.55-21.54-21.5-21.54-21.5-51.79 0-30.67 21.55-52 21.54-21.34 51.79-21.34 30.66 0 52 21.34Q880-524 880-493.04q0 30.04-21.33 51.54-21.34 21.5-52.29 21.5ZM480-480q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm.23-66.67q22.77 0 37.94-15.4 15.16-15.4 15.16-38.16 0-22.77-15.26-37.94-15.27-15.16-37.84-15.16-22.56 0-38.06 15.26-15.5 15.27-15.5 37.84 0 22.56 15.4 38.06 15.4 15.5 38.16 15.5Zm.1 240ZM480-600Z"/></svg><span class="mt-2 font-bold">User Details</span></h1>
            <ul class="border border-red-900 mt-5 rounded-2xl">
                <li class="font-bold p-2">
                    <ul class="flex  justify-between">
                        <li class="w-40 pl-2 text-center">Sl no.</li>
                        <li class="w-60 pl-4 text-center">Name </li>
                    </ul>
                </li>
                @foreach($user as $key=>$Categorie)
                <li class="even:bg-yellow-300 p-2 pl-9">
                    <ul class="flex justify-between">
                        <li class="w-30 text-center">{{$key+1}}</li>
                        <li class="w-60 text-center">{{$Categorie->name}}</li>                     
                    </ul>
                </li>
                @endforeach
            </ul>
           <div class=" flex flex-row justify-between items-center mt-8 ">
                {{$user->links()}}
            </div>
        </div>
         
</body>
</html> 
