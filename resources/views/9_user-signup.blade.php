<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>
    <div class=" bg-gray-300 flex flex-col items-center min-h-screen font-serif">
        <div class=" bg-gray-200 w-full max-w-sm mt-14 rounded-xl py-8 px-4 space-y-5">
    
            <div>
                <h1 class="text-center text-2xl text-blue-900 font-bold">Create your account</h1>
            </div>
            <form action="/user-signup" method="post" class="space-y-3 p-2">
                @csrf
                <div>
                    <label for="name" class="text-blue-600 text-base">Full Name</label><br>
                    <input type="text" name="name" placeholder="Sanjoy Maity " value="{{ old('name') }}" class="w-full outline-none border border-gray-300 rounded-lg p-1 mt-2 px-2 text-black ">
                </div>
                @error('name')
                <div class="text-red-700">{{$message}}</div>
                @enderror
                <div>
                    <label for="email" class="text-blue-600 text-base" >Email address</label><br>
                    <input type="email" name="email" placeholder="you@company.com " value="{{ old('email') }}" class="w-full outline-none border border-gray-300 rounded-lg p-1 mt-2 px-2 text-black ">
                </div>
                @error('email')
                <div class="text-red-700">{{$message}}</div>
                @enderror
                <div>
                    <label for="phone" class="text-blue-600 text-base">Phone Number</label><br>
                    <input type="phone" name="phone" placeholder="+91-6295437135 " value="{{ old('phone') }}" class="w-full outline-none border border-gray-300 rounded-lg p-1 mt-2 px-2 text-black font-sans ">
                </div>
                @error('phone')
                <div class="text-red-700">{{$message}}</div>
                @enderror
                <div>
                    <label for="password" class="text-blue-600 text-base">Password</label><br>
                    <input type="password" name="password" placeholder="abc@123" value="{{ old('password') }}" class="w-full outline-none border border-gray-300 rounded-lg p-1 mt-2 px-2 text-black ">
                </div>
                @error('password')
                <div class="text-red-700">{{$message}}</div>
                @enderror
                <div class="mt-8 ">
                    <button class="w-full bg-blue-600  text-white rounded-2xl text-lg flex px-22 py-2  items-center hover:bg-blue-700">
                   Create Account <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </button>
                </div>
                
            </form>
            
            
            
            
        </div>
    </div>
    <x-user-footer></x-user-footer>

</body>
</html>