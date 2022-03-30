<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Connexion</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="stylesheet" href="css/tailwind.css" type="text/css">
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a513ca5fbe.js" crossorigin="anonymous"></script>
  </head>
  
  <body class="bg-slate-700">
<?php include 'include/navbar.php'; ?>
<br>
    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->
<div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8" align="center">

<nav aria-label="Breadcrumb">
  <ol role="list" class="flex items-center space-x-1 text-sm text-gray-500">
    <li>
      <a class="block transition-colors hover:text-gray-700" href="home"> Accueil </a>
    </li>

    <li>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
      </svg>
    </li>

    <li>
      <a class="block transition-colors hover:text-gray-700" href=""> Connexion </a>
    </li>

    

   
  </ol>
</nav>












<div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8" align="center">
  <div class="max-w-lg mx-auto text-center">
    <h1 class="text-2xl font-bold sm:text-3xl">Connexion</h1>

    <p class="mt-4 text-gray-500">
      Un nom d'utilisateur et un mot de passe, <br> c'est tout ce dont vous avez besoin pour rejoindre l'élite
    </p>
  </div>

  <form action="" class="max-w-md mx-auto mt-8 mb-0 space-y-4">
    <div>
      <label for="email" class="sr-only">Email</label>

      <div class="relative">
        <input
          type="email"
          class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
          placeholder="Entrez votre nom d'utilisateur"
        />

        <span class="absolute inset-y-0 inline-flex items-center right-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
            />
          </svg>
        </span>
      </div>
    </div>

    <div>
      <label for="password" class="sr-only">Mot de passe</label>
      <div class="relative">
        <input
          type="password"
          class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
          placeholder="Entrez votre mot de passe"
        />

        <span class="absolute inset-y-0 inline-flex items-center right-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            />
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            />
          </svg>
        </span>
      </div>
    </div>
    <button
        type="submit"
        class="w-full inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg"
      >
        Connexion
      </button>
    <div class="flex items-center justify-between">
      <p class="text-sm text-gray-500">
        Pas encore de compte ?
        <a class="underline" href="register">Inscrivez vous</a>
      </p>

      
    </div>
  </form>
</div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script> 
  
  </body>
  
</html>
