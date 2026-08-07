<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin login</title>
        @vite('resources/css/app.css')
    </head>
    <body class=" bg-gray-500 flex items-center justify-center min-h-screen font-serif">
            <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm ">
                <h2 class="text-2xl text-center text-blue-800 mb-6">Admin Login</h2>
                @error('user')
                <div class="text-red-600">{{$message}}</div>
                @enderror
                <form action="admin-login" method="post" class="space-y-5">
                @csrf
                    <div>
                        <label for="name" class="text-blue-800 mb-1 ps-2 ">Admin name:</label>
                            <input type="text" name="name" placeholder="Enter your name" class="w-full px-2 py-1.5  border border-gray-300 rounded-2xl outline-none text-base">
                            @error('name')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                    </div>
                    <div>
                        <label for="password" class="text-blue-800 mb-1 ps-2">Password:</label>
                        <input type="password" name="password" placeholder="Enter your password" class="w-full px-2 py-1.5 border border-gray-300 rounded-2xl outline-none text-base" id="pwd">
                        <input type="checkbox" onclick="pwd.type = this.checked ? 'textname' : 'password'" id="id">
                        <label for="password" class="text-green-600 leading-10 ps-1 text-sm font-medium cursor-pointer" onclick="document.getElementById('id').click() ">Show Password</label>
                        @error('password')
                        <div class="text-red-600">{{$message}}</div>
                        @enderror
                    </div>
                        <button type="submit" class="w-full text-center text-white bg-blue-500 rounded-2xl hover:bg-blue-600 py-1.5 text-xl font-normal">Login</button>
                </form>
            </div>
    </body>
</html>









