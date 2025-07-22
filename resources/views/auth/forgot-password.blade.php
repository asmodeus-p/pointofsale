<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/styles.css">
   <style>
        body {
        margin: 0;
        position: relative;
        }

        .bg-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
        }

        .bg-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('../img/a.png'); /* or your actual path */
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 0.5;

        
        }


        .content {
        position: relative;
        z-index: 1;
        padding: 40px;
        }
    </style>
   <title>Dashboard</title>
</head>

<body>

   <div class="bg-wrapper bg-blue-200/50">
      <div class="bg-image"></div>
   </div>

   <x-navbar />
   <x-sidepanel />

    <main class="sm:ml-64 p-6 mt-10">
        <div class="max-w-xl p-6 mx-auto mt-10 bg-white rounded shadow">

            <h2 class="text-xl font-bold">Forgot Password</h2>
            @if (session('status'))
                <p class="text-green-600">{{ session('status') }}</p>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label>Email</label>
                <input type="email" name="email" required class="w-full p-2 border">
                @error('email') <p class="text-red-500">{{ $message }}</p> @enderror

                <button type="submit" class="px-4 py-2 mt-4 text-white bg-blue-500">Send Reset Link</button>
            </form>
        </div>
   </main>

   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
   
</body>
</html>