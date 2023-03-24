<?php
    include("function.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">`
    <link rel="icon" href="assets/images/favicon.png" >
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bokor&family=Hanuman:wght@400;700&family=Kantumruy&family=Poppins&family=Roboto:wght@300;400&display=swap');

        * {
        font-family: 'Poppins', 'Kantumruy';
        scroll-behavior: smooth;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <section class="" style="background-image: url(https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?cs=srgb&dl=pexels-pixabay-531880.jpg&fm=jpg);">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen">
        <div class="w-full bg-gray-400 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
            <div class="flex items-center justify-center">
            <img class="h-8 mt-4" src="./img/citynewslogo.png" alt="">
            </div>
            <div class="p-6 space-y-4  sm:p-8">
                <h1 class="text-xl font-bold text-gray-900 md:text-2xl">
                    បង្កើតគណនី
                </h1>
                <form class="space-y-4" action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">ឈ្មោះរបស់អ្នក</label>
                        <input type="text" name="name" id="name" class="bg-gray-200  text-gray-900 text-sm md:text-md rounded-xl px-2 py-1 block w-full p-2.5" placeholder="ឈ្មោះរបស់អ្នក" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">អុីម៉ែលរបស់អ្នក</label>
                        <input type="email" name="email" id="email" class="bg-gray-200  text-gray-900 text-sm md:text-md rounded-xl px-2 py-1 block w-full p-2.5" placeholder="yourname@gmail.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">លេខសម្ងាត់របស់អ្នក</label>
                        <input type="password" name="password" id="password" placeholder="លេខសម្ងាត់" class="bg-gray-200  text-gray-900 sm:text-sm rounded-xl px-2 py-1 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="c-password" class="block mb-2 text-sm font-medium text-gray-900">បញ្ជាក់លេខសម្ងាត់ម្តងទៀត</label>
                        <input type="confirm-password" name="c-password" id="c-password" placeholder="លេខសម្ងាត់ម្តងទៀត" class="bg-gray-200  text-gray-900 sm:text-sm rounded-xl px-2 py-1 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 bg-orage-200" for="profile">បញ្ជុលរូបរបស់អ្នក</label>
                        <input class="image1 block w-full text-sm px-2 py-1 text-gray-900 rounded-lg bg-gray-200 cursor-pointer" id="profile" name="profile" type="file">
                        <label class="block mb-2 text-sm font-medium text-gray-900 bg-orage-200" for="profile"></label>
                        <img class="showImage1" style="object-fit:cover; width: 150px !important;height:100px !important;" src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg" alt="user_profile">
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4  rounded bg-gray-50" required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 ">ខ្ញុំយល់ព្រមតាម<a class="font-medium text-primary-600 hover:underline" href="#">លក្ខខណ្ឌ</a></label>
                        </div>
                    </div>
                    <button type="submit" name="btn_register" class="w-full text-white bg-gray-600 hover:bg-gray-700  font-medium rounded-lg text-sm px-5 py-3 text-center ">បង្កើតគណនី</button>
                    <p class="text-sm font-light text-gray-600 ">
                        មានគណនីហើយ? <a href="login.php" class="font-medium text-gray-600 hover:underline">ចូលគណនី</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    </section>
</body>
</html>


<script>
    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>