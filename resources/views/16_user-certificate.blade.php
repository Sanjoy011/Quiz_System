<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navber></x-user-navber>
    
   <div class="flex flex-col mt-30 items-center bg-amber-100 border-4 border-amber-600 m-80 justify-center w-200 font-serif rounded-xl border-double ">
        <h1 class=" font-medium text-xl text-red-800 text-center  uppercase mt-10 flex">
           <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#BD4C31"><path d="m387-412 35-114-92-74h114l36-112 36 112h114l-93 74 35 114-92-71-93 71ZM240-40v-309q-38-42-59-96t-21-115q0-134 93-227t227-93q134 0 227 93t93 227q0 61-21 115t-59 96v309l-240-80-240 80Zm410-350q70-70 70-170t-70-170q-70-70-170-70t-170 70q-70 70-70 170t70 170q70 70 170 70t170-70ZM320-159l160-41 160 41v-124q-35 20-75.5 31.5T480-240q-44 0-84.5-11.5T320-283v124Zm160-62Z"/></svg>
            <span>Certificate of Attendance</span></h1> 
        <p class="mt-3 text-xl ">certificate is awarded to </p> 
        <h2 class="mt-2 text-2xl font-bold underline">Sanjoy Maity</h2>
        <p class="mt-3 text-xl ">has Successfully completed the</p>
        <h3 class="mt-3 text-2xl ">React Quiz</h3>
        <p class="mt-3 text-xl font-mono mb-10">{{date('y-m-d')}}</p>
        <a href="" class="mb-10 border border-amber-600 p-2 rounded-2xl hover:bg-amber-400">Download</a>
    </div>
     
</body>
</html>
