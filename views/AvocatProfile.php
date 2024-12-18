<?php
ob_start();
?>

<div class="flex items-center justify-center">
  <div class="bg-white w-1/3 mt-10 rounded-lg">
    <div class="flex items-center justify-center pt-10 flex-col">
      <img src="https://i.pinimg.com/originals/a8/bc/90/a8bc90ea196737604770aaf9c2d56a51.jpg" class="rounded-full w-32">
      <h1 class="text-gray-800 font-semibold text-xl mt-5">Bae Suzy</h1>
      <h1 class="text-gray-500 text-sm">Seoul, South Korea</h>
        <h1 class="text-gray-500 text-sm p-4 text-center">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </h1>
    </div>
    <div class="flex justify-between p-4">
      <div>
        <h1 class="text-xs uppercase text-gray-500">Membership</h1>
        <h1 class="text-xs text-yellow-500">Gold Member</h>
      </div>
      <div>
        <button class="text-xs text-green-300 border-2 py-1 px-2 border-green-300">Renew</button>
      </div>
    </div>
    <div class="flex items-center justify-center mt-3 mb-6 flex-col">
      <h1 class="text-xs text-gray-500">Get Connected</h1>
      <div class="flex mt-2">
      <img src="https://www.iconsdb.com/icons/preview/gray/facebook-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full mr-3">  
           <img src="https://www.iconsdb.com/icons/preview/gray/twitter-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full mr-3">
       <img src="https://www.iconsdb.com/icons/preview/gray/google-plus-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full mr-3">
        <img src="https://www.iconsdb.com/icons/preview/gray/instagram-6-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full">  
      </div>
      
    </div>
  </div>

</div>
<?php
$content = ob_get_clean();
require_once("views/layoutClient.php");