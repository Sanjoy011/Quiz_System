<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <script src="JS/script.js"></script>
    @vite('resources/css/app.css')
    
</head>
<body>
    <x-navber name={{$name}}></x-navber> 
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen  pt-12 ">
        <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-md ">
            @if(!session('quizdetails'))
                <h1 class="text-2xl text-center text-blue-800 font-medium font-serif">Add Quiz</h1>
                <form action="/add-quiz" method="get" class="space-y-5">
                        <div>
                            <textarea type="text" name="quiz" placeholder="Enter quiz name" class="w-full px-2 py-3  border border-gray-300 rounded-2xl outline-none text-base mt-6 font-serif"></textarea>
                        </div>
                        <div>
                            <select type="text" name="category_id" class="w-full px-2 py-2  border border-gray-300 rounded-2xl outline-none text-base mt-2 font-serif">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="w-full text-center text-white text-xl bg-blue-500 rounded-2xl hover:bg-blue-600 py-1 font-normal font-serif">Add</button>
                </form>
            @else
                <span class="text-green-500 font-normal font-serif">Quiz : {{session('quizdetails')->name}}</span>
                <h1 class="text-2xl text-center text-orange-700 font-medium font-serif pt-3">📋 Add Questions</h1>
                <form action="" method="get">
                        <div>
                            <textarea type="text" name="quiz" placeholder="Enter your question " class="w-full px-2 py-2  border border-gray-300 rounded-xl outline-none text-base mt-6 font-serif"></textarea>
                        </div>
                        <div>
                            <input type="text" name="quiz" placeholder="Enter First Option" class="w-full px-2 py-1.5  border border-gray-300 rounded-xl outline-none text-sm mt-6 font-serif">
                        </div>         
                        <div>
                            <input type="text" name="quiz" placeholder="Enter Second Option" class="w-full px-2 py-1.5  border border-gray-300 rounded-xl outline-none text-sm mt-6 font-serif">
                        </div>         
                        <div>
                            <input type="text" name="quiz" placeholder="Enter Third Option" class="w-full px-2 py-1.5  border border-gray-300 rounded-xl outline-none text-sm mt-6 font-serif">
                        </div>         
                        <div>
                            <input type="text" name="quiz" placeholder="Enter Fourth Option" class="w-full px-2 py-1.5  border border-gray-300 rounded-xl outline-none text-sm mt-6 font-serif">
                        </div>  
                        <div>
                            <select type="text" name="category_id" class="w-full px-2 py-1  border border-gray-300 rounded-xl outline-none text-base mt-7 font-serif">
                               <option>Select Right Answer</option>
                               <option>A</option>
                               <option>B</option>
                               <option>C</option>
                               <option>D</option>
                            </select>
                        </div> 
                        <button type="submit" class="w-full text-center text-white text-base bg-blue-500 rounded-2xl hover:bg-blue-600 py-1 font-normal font-serif mt-7">Add More</button>      
                        <button type="submit" class="w-full text-center text-white text-base bg-green-500 rounded-2xl hover:bg-green-600 py-1 font-normal font-serif mt-3">Add & Submit</button>      
                </form>
            @endif
        </div>
    </div>
</body>



<!-- You use @if(!session('quizdetails')) to show two different forms on the same page.

If there is no quiz in the Session, the user will see the Add Quiz form to create a new quiz.

If there is a quiz in the Session, it means the quiz has already been created. So instead of showing the Add Quiz form again, the page shows the Add Question form. This allows the user to keep adding questions to the same quiz without going to another page. -->