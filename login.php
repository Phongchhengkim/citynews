<?php
    include("function.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bokor&family=Hanuman:wght@400;700&family=Kantumruy&family=Poppins&family=Roboto:wght@300;400&display=swap');

        * {
        font-family: 'Poppins', 'Kantumruy';
        scroll-behavior: smooth;
        }
    </style>
</head>
<body >
    <section class="" style="background-image: url(https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?cs=srgb&dl=pexels-pixabay-531880.jpg&fm=jpg);">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen">
        <div class="w-full bg-gray-400 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="flex items-center justify-center">
                <img class="h-8 mt-4" src="./img/citynewslogo.png" alt="">
            </div>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold text-gray-900 md:text-2xl">ចូលគណនីរបស់អ្នក</h1>
                <form class="space-y-4 md:space-y-6" action="" method="post">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">អុីម៉ែលរបស់អ្នក</label>
                        <input type="email" name="email" id="email" class="bg-gray-200  text-gray-900 text-sm md:text-md rounded-xl px-2 py-1 block w-full p-2.5" placeholder="yourname@gmail.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">លេខសម្ងាត់របស់អ្នក</label>
                        <input type="password" name="password" id="password" placeholder="លេខសម្ងាត់" class="bg-gray-200  text-gray-900 sm:text-sm rounded-xl px-2 py-1 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <select name="option" id="" class="bg-gray-200  text-gray-900 sm:text-sm rounded-xl px-2 py-1 block w-full p-2.5">
                            <option selected value="employee">Login as Employee</option>
                            <option value="admin">Login as Admin</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4  rounded bg-gray-50 " >
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-600">ចងចាំខ្ញុំ</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-gray-600 hover:underline">ភ្លេចសម្ងាត់?</a>
                    </div>
                    <button type="submit" name="btn_login" class="w-full text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-xl text-sm px-5 py-3 text-center ">ចូលគណនី</button>

                </form>
            </div>
        </div>
    </div>
    </section>
</body>
</html>