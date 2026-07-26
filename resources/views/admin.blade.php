<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-white shadow-md px-4 py-3 ">
        <div class="flex justify-between item-center">
            <div class="text-2xl text-gray-700 cursor-pointer hover:text-amber-700">
                Quiz System
            </div>
            <div class="space-x-5">
                <a class="text-gray-700 hover:text-amber-600" href="">Categories</a>
                <a class="text-gray-700 hover:text-amber-600" href="">Quiz</a>
                <a class="text-gray-700 hover:text-amber-600" href="">Welcome{{$name}}</a>
                <a class="text-gray-700 hover:text-amber-600" href="">Login</a>
            </div>
        </div>
        
    </nav>
</body>
</html> 