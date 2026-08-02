<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>
    <div class=" bg-gray-400 flex flex-col items-center min-h-screen font-serif">
        <div class=" bg-gray-200 w-full max-w-sm mt-25 rounded-xl py-8 px-4 space-y-5">
    
            <div>
                <h1 class="text-center text-2xl text-lime-950 font-bold">Create your account</h1>
            </div>
            <form action="" method="post" class="space-y-3 p-3">
                <div>
                    <label for="name" class="text-blue-800 text-base">Full Name</label><br>
                    <input type="text" name="name" placeholder="Sanjoy Maity " class="w-full outline-none border border-gray-400 rounded-xl p-2 mt-2 text-black ">
                </div>
                <div>
                    <label for="email" class="text-blue-700 text-base">Email address</label><br>
                    <input type="email" name="email" placeholder="you@company.com " class="w-full outline-none border border-gray-400 rounded-xl p-2 mt-2 text-black ">
                </div>
                <div>
                    <label for="phone" class="text-blue-700 text-base">Phone Number</label><br>
                    <input type="phone" name="phone" placeholder="+91-6295437135 " class="w-full outline-none border border-gray-400 rounded-xl p-2 mt-2 text-black font-sans ">
                </div>
                <div>
                    <label for="password" class="text-blue-700 text-base">Password</label><br>
                    <input type="password" name="password" placeholder="abc@123" class="w-full outline-none border border-gray-400 rounded-xl p-2 mt-2 text-black ">
                </div>
            </form>
            
            
            
            
        </div>
    </div>
    <x-user-footer></x-user-footer>

</body>
</html>