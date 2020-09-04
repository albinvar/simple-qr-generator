<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
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
<form action="result.php" method="post">
 <div class="bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-center text-gray-900 text-lg font-medium title-font mb-5 tracking-in-expand">QR Code Generator</h2>
      <div class="relative mb-4">
        <label for="text" class="leading-7 text-sm text-gray-600">Text/Link</label>
        <input type="text" id="text" name="text" placeholder="Type your text here" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>
      <div class="lg:w-full md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="wm" class="leading-7 text-sm text-gray-600">Padding
           <select class="form-select block-sm w-full text-sm text-gray-600" id="wm" name="wm" required>
    <option value="1">1</option>
    <option value="2">2 (Recommended)</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select></label>
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
                  <label for="sf" class="leading-7 text-sm text-gray-600">Clarity
           <select class="form-select block-sm w-full text-sm text-gray-600" id="sf" name="sf" required>
    <option value="1">1</option>
    <option value="4">4</option>
    <option value="6">6</option>
    <option value="9">9</option>
    <option value="15">15 (Recommended)</option>
    <option value="20">20</option>
  </select></label>
          </div>
        </div>
        </div>
        </div>
  
      <button name ="submit" class="text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-6 bounce-bottom">Generate</button>
      <p class="text-xs text-center text-gray-500 mt-3">Please use simple text for conversation to prevent lagging. Thank you ☺️</p>
    </div></div>
    </form>
             <div></div>
    	</div>
    </body>
</html>
