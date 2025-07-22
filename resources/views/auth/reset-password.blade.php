<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/styles.css">
   <title>PointOfSale</title>
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
</head>

<body class="flex items-center justify-center mt-52">
    <div class="bg-wrapper bg-blue-200/50">
        <div class="bg-image"></div>
    </div>

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
