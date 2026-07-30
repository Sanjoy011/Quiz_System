<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="font-serif bg-white">
    <x-navber name={{$name}}>
    </x-navber>
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h1 class="text-5xl font-bold text-gray-800 leading-tight">
                    Challenge Your Mind
                    <span class="text-blue-600">With Fun Quizzes</span>
                </h1>

                <p class="mt-6 text-lg text-gray-600">
                    Explore thousands of quizzes, improve your knowledge,
                    and compete with your friends.
                </p>

                <div class="mt-8 flex gap-4">
                    <a  href="/add-quiz" class="bg-blue-600 text-white px-7 py-3 rounded-xl hover:bg-blue-700 transition">
                        🚀 Start Quiz
                    </a>

                    <a href="/admin-categories"  class="border border-blue-600 text-blue-600 px-7 py-3 rounded-xl hover:bg-blue-600 hover:text-white transition">
                        📚 Browse Categories
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=700"
                    class="rounded-3xl shadow-2xl"
                    alt="">
            </div>

        </div>
    </section>

    <!-- Features -->
    <section class="max-w-7xl mx-auto px-6 pb-20">

        <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">
            Why Choose QuizMaster?
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">
                <div class="text-5xl">📝</div>

                <h3 class="text-2xl font-semibold mt-5">
                    Unlimited Quizzes
                </h3>

                <p class="text-gray-600 mt-3">
                    Practice with unlimited quizzes from multiple categories.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">
                <div class="text-5xl">🏆</div>

                <h3 class="text-2xl font-semibold mt-5">
                    Earn Points
                </h3>

                <p class="text-gray-600 mt-3">
                    Score points and climb the leaderboard after every quiz.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition">
                <div class="text-5xl">📈</div>

                <h3 class="text-2xl font-semibold mt-5">
                    Track Progress
                </h3>

                <p class="text-gray-600 mt-3">
                    Monitor your learning progress with detailed reports.
                </p>
            </div>

        </div>

    </section>

    <!-- Categories -->
    <section class=" py-16">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-4xl font-bold text-center mb-12">
                Popular Categories
            </h2>

            <div class="grid md:grid-cols-4 gap-6">

                <div class="bg-blue-300 rounded-2xl p-8 text-center hover:bg-blue-600 hover:text-white transition">
                    💻
                    <h3 class="mt-4 text-xl font-semibold">Programming</h3>
                </div>

                <div class="bg-green-300 rounded-2xl p-8 text-center hover:bg-green-600 hover:text-white transition">
                    🌎
                    <h3 class="mt-4 text-xl font-semibold">Geography</h3>
                </div>

                <div class="bg-yellow-300 rounded-2xl p-8 text-center hover:bg-yellow-500 hover:text-white transition">
                    🔬
                    <h3 class="mt-4 text-xl font-semibold">Science</h3>
                </div>

                <div class="bg-pink-300 rounded-2xl p-8 text-center hover:bg-pink-600 hover:text-white transition">
                    📖
                    <h3 class="mt-4 text-xl font-semibold">History</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- Registation form -->

     <section class=" py-16">
         <h2 class="text-3xl font-bold text-center text-black mb-15">
                🎓 Student Registration
            </h2>

        <div class="max-w-lg mx-auto bg-white shadow-xl rounded-2xl p-8">
            <p class="text-center text-gray-800 mt-2">
                Register now and start your learning journey.
            </p>

            <form action="/student-register" method="POST" class="mt-8 space-y-5">
                @csrf

                <input
                    type="text"
                    name="name"
                    placeholder="Full Name"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input
                    type="tel"
                    name="phone"
                    placeholder="Phone Number"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition">
                    🚀 Register Now
                </button>
            </form>
        </div>
    </section>
    <x-footer></x-footer>
</body>
</html> 
