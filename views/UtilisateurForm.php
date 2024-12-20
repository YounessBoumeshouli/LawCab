<?php
ob_start();
$title = "Formulaire for";
?>

<form class="w-full max-w-sm" method="post" action="index.php?action=Authentification">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Full Name
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="nom" id="inline-full-name" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="password" placeholder="******************">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"></div>
      <label class="md:w-2/3 block text-gray-500 font-bold">
        <input class="mr-2 leading-tight " type="button" id="showMatrculeInput" value="I'm a lawyer">
        <span class="text-sm">
        Sing in as a Lawyer;
        </span>
      </label>
    
  </div>
  <div id="matdiv" class="hidden block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
        <label for="matricule">Matricule</label>
        <input type="text" name="matricule">
      </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Sign IN
      </button>
    </div>
    <a href="index.php?action=ClientInscriptionForm">i don't have an account Sign Up</a>

  </div>
</form>




<?php
$content = ob_get_clean();
require_once("views/layoutClient.php");
