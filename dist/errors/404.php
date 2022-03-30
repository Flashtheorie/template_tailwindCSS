<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a513ca5fbe.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-900">



<div class="w-2/2 flex justify-center items-center h-screen " align="center">
<a class="relative block p-8 border  shadow-xl rounded-xl bg-white" href="javascript:history.back()">
  

  <div class="mt-4 text-gray-500 sm:pr-8 bg-white ">
  <i class="fa-duotone fa-map-location-dot fa-2xl"></i>

    <h5 class="mt-4 text-6xl font-bold text-gray-900">Page non trouvée</h5>
    <br>
    <p>"<code class="text-red-600 text-2xl"><?php echo $_SERVER['REQUEST_URI']; ?> </code>"</p>
    <br><br>
    <p class="hidden mt-2 text-lg sm:block">
      La page demandée n'existe pas
      
      
    </p>
    <br>
    <button class="h-12 px-6 m-2 text-xl text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
    <i class="fa-duotone fa-left-long"></i>
    Retour</button>
    

     
  </div>
</a>

</div>








</body>
</html>