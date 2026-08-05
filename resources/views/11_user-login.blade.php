<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>

    <form action="/user-login" method="post">
        @csrf
        <div class="bg-gray-300 min-h-screen font-serif flex flex-col items-center justify-center  ">
            <div class="bg-white mb-40 py-10 px-6 rounded-2xl border border-gray-200 max-w-xs w-full space-y-4 ">
                <div>
                    <h1 class="text-center text-2xl font-bold text-blue-700">User Login</h1>
                </div>
                @error('user')
                <div class="text-red-700 text-center">{{$message}}</div>
                @enderror
                <div class="mt-5">
                    <label for="name" class="text-blue-700 font-base">Email:</label><br>
                    <input type="email" name="email" placeholder="Enter your email" class="w-full border border-gray-200 rounded-xl p-1 px-3 mt-2 outline-none">
                    @error('email')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="text-blue-700 font-base">Password:</label><br>
                    <input type="password" name="password" placeholder="Enter your password" id="pwd" class="w-full border border-gray-200 rounded-xl p-1 px-3 mt-2 outline-none" >
                    @error('password')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" class="" id="checkbox" onclick="pwd.type = this.checked ? 'text' : 'password' ">
                    <label for="check" class="text-green-700 text-sm cursor-pointer" onclick="document.getElementById('checkbox').click() ">Show password</label>
                </div>
                <button class="w-full bg-blue-600 rounded-2xl py-1 hover:bg-blue-700 text-white text-lg ">
                    Login
                </button>   
            </div>
        </div>
    </form>
</body>
</html>
<x-user-footer></x-user-footer>