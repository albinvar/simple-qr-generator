<?php include 'modules/process.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="og:title" property="og:title" content="QR Code Generator">
    <meta name="description" content="Simple QR code generator created using php.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="manifest" href="/site.webmanifest">
    </head>
    <body class="bg-gray-800">
    	<div class="w-full max-w">
  <div class="flex items-center border-b border-teal-500 py-2 ">
    <div class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none font-bold text-xl">QR Generator</div>
   <a href="mailto:albinmelazhakathu@gmail.com"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
      Contact
    </button></a>
    <button class="flex-shrink-0 bg-gray-700 hover:bg-gray-600 border-teal-500 hover:border-teal-700 text-sm text-white text-sm py-1 px-2 rounded-full mx-3 heartbeat" type="button">
 	<i style="font-size: 27px;" class="fa fa-github"></i>
     </button>
  </div>
</div>
	     <div class="px-8 py-12">
    	     <div> 
<div class="bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-center text-gray-900 text-lg font-medium title-font mb-5">QR Code Generator</h2>
     
    <img class="text-center mx-auto w-auto h-auto rotate-in-center" alt="qrcode" src="<?= htmlentities($result); ?>">
      <p class="text-xs text-center text-gray-500 mt-3">Your QR Code was generated successfully...!!!</p>
    
      <div class="text-center m-2">
        <a href="<?= htmlentities($result); ?>" download><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 text-sm px-4 mr-2 rounded bounce-left">Download</button></a>
		<a href="<?= htmlentities($result); ?>"><button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 ml-2 text-sm rounded bounce-right">View</button></a>

        </div>
      
      <p class="text-xs text-center text-gray-500 mt-3">Designed by <a href="https://albinvarghese.tk" target="_blank"> Albin Varghese</a></p>
      <h4 class="text-xs text-center text-indigo-500 mt-3"><a href="index.php"> Go Back</a></h4>
    </div></div>
             <div></div>
    	</div>
    </body>
</html>
