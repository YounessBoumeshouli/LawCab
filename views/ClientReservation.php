<!-- component -->
<!-- This is an example component -->

<?php
ob_start();
?>
 
<div class=' min-h-screen from-yellow-100 via-green-300 to-blue-500 bg-gradient-to-br'>
   
<div class="container  w-full ml-36 mb-16  bg-white  shadow-lg    transform   duration-200 easy-in-out">
                <div class=" h-32 overflow-hidden" >
                    <img class="w-full" src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="" />
                </div>
                <div class="flex justify-center px-5  -mt-12">
                    <img class="h-32 w-32 bg-white p-2 rounded-full   " src="https://images.unsplash.com/photo-1560250097-0b93528c311a" alt="" />

                </div>
                <div class=" ">
                    <div class="text-center px-14">
                        <h2 class="text-gray-800 text-3xl font-bold"><?=$result[0]["full_name"]?></h2>
                        <a class="text-gray-400 mt-2 hover:text-blue-500" href="https://www.instagram.com/immohitdhiman/" target="BLANK()"><?=$result[0]["email"]?></a>
                        <p class="mt-2 text-gray-500 text-sm"><?=$result[0]["biography"]?></p>
                    </div>
                    <hr class="mt-6" />
                   
                </div>
            </div>
    <div class='w-full max-w-lg p-6 mx-auto bg-white rounded-2xl shadow-xl flex flex-col'>
        
<div class="flex justify-between pb-4">
  <div class="-rotate-90 cursor-pointer">
    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
 <path d="M11.001 6L6.00098 1L1.00098 6" stroke="black" stroke-opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
 </div>
    <span class="uppercase text-sm font-semibold text-gray-600">january - 2022</span>
    <div class="rotate-90 cursor-pointer">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.001 6L6.00098 1L1.00098 6" stroke="black" stroke-opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    </div>
       
    </div>
 <div class="flex justify-between font-medium uppercase text-xs pt-4 pb-2 border-t">

    <div class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-red-500 text-red-500 shadow-md">
    sun
    </div>


    <span class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-green-500 text-green-500 shadow-md">
    mon
    </span>


    <span class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-green-500 text-green-500 shadow-md">
    tue
    </span>


    <span class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-green-500 text-green-500 shadow-md">
    wed
    </span>


    <span class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-green-500 text-green-500 shadow-md">
    thu
    </span>


    <span class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-green-500 text-green-500 shadow-md">
    fri
    </span>


    <span class="px-3 border rounded-sm w-14 h-5 flex items-center justify-center border-green-500 text-green-500 shadow-md">
    sat
    </span>

 </div>

 <div class="flex justify-between font-medium text-sm pb-2">

    <span class="px-1 text-gray-400 w-14 flex justify-center items-center">
    30
    </span>


    <span class="px-1 text-gray-400 w-14 flex justify-center items-center">
    31
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    01
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    02
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    03
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    04
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    05
    </span>

 </div>
  <div class="flex justify-between font-medium text-sm pb-2">

   <span class="px-1 w-14 flex justify-center items-center border border-red-500 text-red-500 cursor-pointer">
    06
    </span>


   <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    07
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    08
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    09
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 10
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 11
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 12
    </span>

 </div>

 <div class="flex justify-between font-medium text-sm pb-2">

   <span class="px-1 w-14 flex justify-center items-center border border-red-500 text-red-500 cursor-pointer">
 13
    </span>


   <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 14
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 15
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 16
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 17
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 18
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 19
    </span>

 </div>

 <div class="flex justify-between font-medium text-sm pb-2">

   <span class="px-1 w-14 flex justify-center items-center border border-red-500 text-red-500 cursor-pointer">
 20
    </span>


   <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
 21
    </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    22
        </span>


        <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    23
        </span>


        <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    24
        </span>


        <span class="px-1 w-14 flex justify-center items-center border border-green-500 text-white bg-green-500 rounded-2xl cursor-pointer shadow-md">
    25
        </span>


        <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    26
        </span>

    </div>

    <div class="flex justify-between font-medium text-sm pb-2">

    <span class="px-1 w-14 flex justify-center items-center border border-red-500 text-red-500 cursor-pointer">
    27
        </span>


    <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    28
        </span>


        <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    29
        </span>


        <span class="px-1 w-14 flex justify-center items-center border hover:border-green-500 hover:text-green-500 cursor-pointer">
    30
    </span>


    <span class="px-1 text-gray-400 w-14 flex justify-center items-center">
    01
        </span>


        <span class="px-1 text-gray-400 w-14 flex justify-center items-center">
    02
        </span>


        <span class="px-1 text-gray-400 w-14 flex justify-center items-center">
    03
    </span>

 </div>
 <div class="flex justify-center">
 <button class="bg-green-400 w-48"> reserver une Consultation <button>

 </div>
</div>
<?php
$content = ob_get_clean();
require_once("views/layoutClient.php");