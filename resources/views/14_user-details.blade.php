<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>
    <div class=" mt-10 flex flex-col items-center w-full min-h-screen font-serif ">
            <h1 class="font-bold text-xl text-red-800 text-center mt-5"> Attempted Quiz List </h1>
            
            <ul class="border border-blue-900 mt-5 rounded-2xl py-3 w-200">
                <li class="font-bold p-2">
                    <ul class="flex  justify-between">
                        <li class="w-30 pl-2">Sl no.</li>
                        <li class="w-130 pl-4">Name</li>
                        <li class="w-32 pl-4 text-center mr-5">Status</li>
                    </ul>
                </li>
                @foreach($recordResult as $key=>$record)
                <li class="even:bg-yellow-200 p-2 pl-9 ">
                    <ul class="flex justify-between">
                        <li class="w-30 ">{{$key+1}}</li>
                        <li class="w-140">{{$record->name}}</li>
                        @if($record->status==2)
                        <li class="w-32 text-green-500 font-bold text-center mr-4">complete</li>
                        @else
                        <li class="w-32 text-red-500 font-bold text-center mr-4">Incomplete</li>
                        @endif
                    </ul>
                </li>
                @endforeach
            </ul>
    </div>
</body>
</html>
<x-user-footer></x-user-footer>