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

    <!-- //Course added flash message -->
    @if(session('addcategory'))
    <div class="fixed top-25 right-8 
            bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg 
            animate-pulse transition-opacity duration-500" id="flashMessage">{{session('addcategory')}}</div>
    @endif

    <!-- //Deleted category flash message -->
    @if(session('deletecategory'))
        <div class="fixed top-25 right-8 
            bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg 
            animate-pulse transition-opacity duration-500" id="flashMessage">{{session('deletecategory')}}</div>
    @endif


    <!-- Add categories items -->
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen  pt-8 ">
        <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm ">
                <h1 class="text-2xl text-center text-blue-800 font-medium">➕ Create New Category</h1>
            <form action="/add-categories" method="post" class="space-y-5">
                @csrf
                    <div>
                        <input type="text" name="category" placeholder="Enter category name" class="w-full px-2 py-2  border border-gray-300 rounded-2xl outline-none text-base mt-6">
                    </div>
                    @error('category')
                    <div class="text-red-700">{{$message}}</div>
                    @enderror
                    <button type="submit" class="w-full text-center text-white text-xl bg-blue-500 rounded-2xl hover:bg-blue-600 py-1 font-normal">Add</button>
            </form>
        </div>
        <div class="w-200">
            <h1 class="text-2xl text-amber-700 mb-5 mt-7 font-medium">📚 Category List: </h1>
            <!-- add categories table items -->
            <ul class="border border-gray-300">
                <li class="p-2 font-bold">
                    <ul class="flex justify-around text-bold">
                        <li class="w-30">Sl. no</li>
                        <li class="w-30">TUTORIALS</li>
                        <li class="w-10">CREATOR</li>
                        <li class="w-30">ACTION</li> 
                    </ul>
                </li>
                @foreach($categories as $categorie)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-around">
                        <li class="w-30">{{$categorie->id}}</li>
                        <li class="w-30">{{$categorie->name}}</li>
                        <li class="w-10">{{$categorie->creator}}</li>
                        <li class="w-25">
                            <a href="categories/delete/{{$categorie->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#EA3323"><path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/></svg>
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
