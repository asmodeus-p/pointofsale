<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PointOfSale</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    
    @vite('resources/css/app.css')
</head>

<body class="relative flex items-center justify-center mt-32 bg-gray-100">

    <div class="bg-wrapper bg-blue-200/50">
        <div class="bg-image"></div>
    </div>

    <div class="w-full max-w-md p-8 bg-white border border-gray-300 rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center">Login</h2>

        @if ($message = Session::get('success'))
            <div class="p-2 mb-4 text-sm text-center text-red-700 bg-red-100 rounded">
                {{ $message }}
            </div>
        @endif


        <form action="{{ route('authenticate') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit"
                    class="hover:bg-blue-700 active:scale-95 w-full px-4 py-2 text-white transition-all duration-150 bg-blue-600 rounded-md">
                    Login
                </button>

            </div>

            <div class="mt-3 text-sm text-center">
                Create an account?
                <a href="{{ route('register') }}" class="hover:underline font-semibold text-blue-600">Register</a>
            </div>
            <div class="mt-2 text-right">
                <a href="{{ route('password.request') }}" class="hover:underline text-sm text-blue-600">
                    Forgot your password?
                </a>
            </div>


        </form>
    </div>

</body>
</html>
