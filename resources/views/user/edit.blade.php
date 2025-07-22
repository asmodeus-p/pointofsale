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
    <h2 class="mb-4 text-xl font-bold">Edit Profile</h2>

    @if(session('success'))
        <div class="p-2 mb-4 text-green-800 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('user.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 mt-1 border border-gray-300 rounded" value="{{ old('name', $user->name) }}">
            @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 mt-1 border border-gray-300 rounded">
            @error('password') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>

        <button type="submit" class="hover:bg-blue-600 px-4 py-2 text-white bg-blue-500 rounded">Update Profile</button>
    </form>
</div>
   </main>

   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
   
</body>
</html>