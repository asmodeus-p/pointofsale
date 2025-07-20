<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PointOfSale</title>
</head>
<body class="flex items-center justify-center min-h-screen">

   <x-navbar />
   <x-sidepanel />
   
    <div class="sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
        <form class="space-y-6" action="{{ route(categories.store) }}" method="POST">
            <h5 class="dark:text-white text-xl font-medium text-gray-900">Add Category</h5>
            @csrf
            <div>
                <label for="text" class="dark:text-white block mb-2 text-sm font-medium text-gray-900">Name</label>
                <input type="text" name="name" id="name" placeholder="John Doe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
            <div>
              <label for="text" class="dark:text-white block mb-2 text-sm font-medium text-gray-900">Description</label>
              <input type="text" name="description" id="description"
                  class="h-20 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                  placeholder="name@company.com" />
          </div>


            
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 w-4 h-4 border border-gray-300 rounded-sm" />
                    </div>
                    <label for="remember" class="ms-2 dark:text-gray-300 text-sm font-medium text-gray-900">Hidden</label>
                </div>
               
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Save </button>
            
        </form>
    </div>

</body>
</html>
