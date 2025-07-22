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

<body class="bg-gray-400/50 flex items-center justify-center mt-52">

    <main class="w-full max-w-xl p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Reset Password</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <label>New Password</label>
            <input type="password" name="password" required class="w-full p-2 border">
            @error('password') <p class="text-red-500">{{ $message }}</p> @enderror

            <label class="mt-4">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="w-full p-2 border">

            <button type="submit" class="px-4 py-2 mt-4 text-white bg-blue-500">Reset Password</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
