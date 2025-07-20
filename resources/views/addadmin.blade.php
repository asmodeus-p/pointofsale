<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <title>PointOfSale</title>
</head>
<body>

   <div class="bg-wrapper">
      <div class="bg-image"></div>
   </div>

   <x-navbar />
   <x-sidepanel />

    <div class="sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 w-full max-w-sm p-4 border border-gray-200 rounded-lg shadow-sm">
        <form class="space-y-6" action="#">
            <h5 class="dark:text-white text-xl font-medium text-gray-900">Add Admin</h5>
            <div>
                <label for="text" class="dark:text-white block mb-2 text-sm font-medium text-gray-900">Name</label>
                <input type="text" name="password" id="password" placeholder="John Doe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
            <div>
                <label for="email" class="dark:text-white block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
            </div>

            <div>
                <label for="password" class="dark:text-white block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="********" required />
            </div>

            <div>
                <label for="text" class="dark:text-white block mb-2 text-sm font-medium text-gray-900">Phone No.</label>
                <input type="text" name="phone" id="phone" placeholder="00000000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
            
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 w-4 h-4 border border-gray-300 rounded-sm" required />
                    </div>
                    <label for="remember" class="ms-2 dark:text-gray-300 text-sm font-medium text-gray-900">Is Ban</label>
                </div>
               
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</body>
</html>
