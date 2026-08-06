<div>
    <nav class="bg-yellow-500 text-center shadow-2xl text-gray-800 font-serif py-1.5 text-sm ">Challenge Your Mind =><span class=" cursor-pointer hover:underline font-serif text-white hover:text-red-800  transition">Learners</span></nav>
</div>
<nav class="bg-indigo-950 shadow-md px-4 py-3 font-serif sticky top-0 z-50">
    <div class="flex justify-between  text-white">
        <div>
            <h1 class="text-3xl ml-6">🧠 Learners</h1>
        </div>
        <div class="space-x-8 flex item-center mr-10 mt-1 text-base">
            <a href="/" class="hover:text-yellow-500  transition">Home</a>
            <a href="/catigory" class="hover:text-yellow-500  transition">Categories</a>
            <a href="" class="hover:text-yellow-500  transition">Blog</a>

            @if(Session('user'))
            <a href="/user-details" class="hover:text-yellow-500  transition">Welcome, <span class="text-yellow-400 text-sm normal-case">{{Session('user')->name}}</span></a>
            <a href="/user-logout" class="hover:text-yellow-500  transition">Logout</a>
            @else
            <a href="user-signup" class="hover:text-yellow-500  transition">Signup</a>
            <a href="/user-login" class="hover:text-yellow-500  transition">Login</a>
            @endif
        </div>
    </div>
</nav>

