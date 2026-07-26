<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navber name={{$name}}></x-navber>
    @if(session('addcategory'))
    <div>{{session('addcategory')}}</div>
    @endif
    <div class=" bg-gray-200 flex justify-center pt-10">
        <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm ">
                <h1 class="text-2xl text-center text-blue-800 font-medium">Add Category</h1>
            <form action="/add-categories" method="post" class="space-y-5">
                @csrf
                    <div>
                        <input type="text" name="category" placeholder="Enter category name" class="w-full px-2 py-2  border border-gray-300 rounded-2xl outline-none text-base mt-6">
                    </div>
                    <button type="submit" class="w-full text-center text-white text-xl bg-blue-500 rounded-2xl hover:bg-blue-600 py-1 font-normal">Add</button>
            </form>
        </div>
    </div>
</body>
</html> 
