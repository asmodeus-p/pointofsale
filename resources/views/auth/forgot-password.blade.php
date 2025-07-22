<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/styles.css">
   <title>PointOfSale</title>
</head>

<body class="flex items-center justify-center mt-56">
    <div class="bg-wrapper bg-blue-200/50">
        <div class="bg-image"></div>
    </div>

    <main class="w-full max-w-xl p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Forgot Password</h2>

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
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
