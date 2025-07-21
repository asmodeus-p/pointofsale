{{-- resources/views/auth/verify-email.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center mt-40 bg-gray-100">

    <div class="w-full max-w-md p-8 bg-white rounded shadow-md">
        <h1 class="mb-4 text-2xl font-bold text-center text-gray-800">Email Verification</h1>
        
        <p class="mb-4 text-gray-700">
            Before proceeding, please check your email for a verification link.
        </p>
        <p class="mb-6 text-gray-700">
            If you didn’t receive the email, click the button below to request another.
        </p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
                Resend Verification Email
            </button>
        </form>

        @if (session('message'))
            <div class="px-4 py-3 mt-4 text-sm text-green-700 bg-green-100 border border-green-200 rounded">
                {{ session('message') }}
            </div>
        @endif
    </div>

</body>
</html>
